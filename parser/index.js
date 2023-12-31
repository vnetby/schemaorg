/**
 * @typedef {{'@id': string}} SchemaIdProp
 * 
 * @typedef {{
*      '@id': string,
*      '@type': string|string[],
*      'rdfs:comment': string,
*      'rdfs:label': string,
*      'rdfs:subClassOf': SchemaIdProp|SchemaIdProp[],
*      'schema:domainIncludes': SchemaIdProp|SchemaIdProp[],
*      'schema:rangeIncludes': SchemaIdProp|SchemaIdProp[]
* }} SchemaGraph
* 
* @typedef {{
*      '@contex': Object,
*      '@graph': SchemaGraph[]
* }} SchemaObject
* 
*/

import fetch from "node-fetch";
import fs from "fs";
import path from "path";
import { glob } from "glob";

const __filename = new URL(import.meta.url).pathname;
const __dirname = path.dirname(__filename);

const RDF_SCHEMA_URL = 'https://schema.org/version/latest/schemaorg-current-https.jsonld';

const NAMESPACE_TYPES = 'Vnetby\\Schemaorg\\Types';
const BASE_CLASS = 'Vnetby\\Schemaorg\\Types\\Type';
const PATH_TYPES = path.resolve(__dirname, '../src/Types');

const PATH_DATA_TYPES = path.resolve(__dirname, '../src/DataTypes');
const NAMESPACE_DATA_TYPES = 'Vnetby\\Schemaorg\\DataTypes';
const BASE_CLASS_DATA_TYPES = 'DataType';

const DATA_TYPES_TO_PHP = {
    DataBoolean: ['bool'],
    DataCssSelectorType: ['string'],
    DataDate: ['string'],
    DataDateTime: ['string'],
    DataFalse: ['false'],
    DataFloat: ['string', 'float'],
    DataInteger: ['string', 'int'],
    DataNumber: ['string', 'int', 'float'],
    DataPronounceableText: ['string'],
    DataText: ['string'],
    DataTime: ['string'],
    DataTrue: ['true'],
    DataURL: ['string'],
    DataXPathType: ['string']
}

let DATA_TYPES_IDS = [];
let TYPES_COLLECTION = [];

const fetchData = async () => {
    let res = await fetch(RDF_SCHEMA_URL);
    let data = await res.json();
    return data;
}


/**
* @param {SchemaObject} data 
*/
const parseData = async (data) => {
    let res = {
        dataTypes: [],
        types: [],
    };

    for (let i = 0; i < data['@graph'].length; i++) {
        if (isProperty(data['@graph'][i]) || getIdProps(data['@graph'][i], 'rdfs:subClassOf').length > 0) {
            continue;
        }

        if (!isDataType(data['@graph'][i]) && !isRdfsClass(data['@graph'][i])) {
            continue;
        }

        let item = JSON.parse(JSON.stringify(data['@graph'][i]));

        item['children'] = getItemChildren(data['@graph'], item['@id'], NAMESPACE_DATA_TYPES, PATH_TYPES);

        if (isDataType(data['@graph'][i])) {
            res.dataTypes.push(item);
        } else {
            res.types.push(item);
        }
    }

    fillNamespaces(res.types, NAMESPACE_TYPES, PATH_TYPES, BASE_CLASS);
    getAllDataTypesIds(res.dataTypes, DATA_TYPES_IDS);
    getTypesCollection(res.types, TYPES_COLLECTION);

    fillProperties(data['@graph'], res.types);

    await clearFolder(PATH_DATA_TYPES, [path.join(PATH_DATA_TYPES, 'DataType.php')]);
    await clearFolder(PATH_TYPES, [path.join(PATH_TYPES, 'Type.php')]);

    createDataTypes(res.dataTypes);
    createTypes(res.types);
}


const createTypes = (data) => {
    for (let i = 0; i < data.length; i++) {
        let item = data[i];
        let str = getTypeClassContent(item);
        if (!fs.existsSync(item['path'])) {
            fs.mkdirSync(item['path'], { recursive: true });
        }
        fs.writeFileSync(item['file'], str);
        if (item.children.length) {
            createTypes(item.children);
        }
    }
}


const getTypeClassContent = (item) => {
    let nameSpace = item['namespace'];
    let extend = item['extend'];
    let className = item['className'];
    let comment = formatComment(item['rdfs:comment'], 1);
    let strProps = getTypeClassPropsStr(item);
    let strSetters = getTypeClassSettersStr(item);
    let strGetters = getTypeClassGettersStr(item);
    let str = `<?php

/**
 * @see https://schema.org/${className}
${comment}
 */

namespace ${nameSpace};

class ${className} extends ${extend}
{
    const TYPE = '${className}';`;

    if (strProps) {
        str += `
${strProps}`;
    }
    if (strSetters) {
        str += `
${strSetters}`;
    }
    if (strGetters) {
        str += `
${strGetters}`;
    }
    str += `
}
`;

    return str;
}


const getTypeClassGettersStr = (item) => {
    let arrStr = [];

    for (let i = 0; i < item.props.length; i++) {
        let prop = item.props[i];
        let fnName = `get${ucFirst(getRdfsLabel(prop))}`;
        let propName = getRdfsLabel(prop);
        let comment = formatComment(prop['rdfs:comment'], 5);
        let types = formatTypesStr(prop.types);
        let str = `
    /**
${comment}
     * @return ${types}|null
     */
    function ${fnName}()
    {
        return $this->getProp('${propName}');
    }`;
        arrStr.push(str);
    }

    return arrStr.join("\n");
}


const getTypeClassSettersStr = (item) => {
    let arrStr = [];

    for (let i = 0; i < item.props.length; i++) {
        let prop = item.props[i];
        let fnName = `set${ucFirst(getRdfsLabel(prop))}`;
        let propName = getRdfsLabel(prop);
        let comment = formatComment(prop['rdfs:comment'], 5);
        let types = formatTypesStr(prop.types);
        let str = `
    /**
${comment}
     * @param ${types} $value
     * @return static
     */
    function ${fnName}($value)
    {
        return $this->setProp('${propName}', $value);
    }`;
        arrStr.push(str);
    }

    return arrStr.join("\n");
}


/**
 * - Формирует строку с php типами
 * @param {string[]} arrTypes 
 * @returns {string}
 */
const formatTypesStr = (arrTypes) => {
    if (!arrTypes.length) {
        return 'mixed';
    }
    let res = [];
    let phpRes = [];
    for (let i = 0; i < arrTypes.length; i++) {
        let type = arrTypes[i];
        res.push(type);
        let phpType = getDataTypePhp(type);
        if (phpType.length) {
            for (let j = 0; j < phpType.length; j++) {
                if (!phpRes.includes(phpType[j])) {
                    phpRes.push(phpType[j]);
                }
            }
        }
    }
    if (!phpRes.length) {
        return res.join('|');
    }
    return phpRes.join('|') + '|' + res.join('|');
}


/**
 * @param {string} schemaDataType 
 * @returns {string[]}
 */
const getDataTypePhp = (schemaDataType) => {
    let className = schemaDataType.replace(/.*\\([^\\]+)$/, "$1");
    if (DATA_TYPES_TO_PHP[className] && DATA_TYPES_TO_PHP[className].length) {
        return DATA_TYPES_TO_PHP[className];
    }
    return [];
}


const getTypeClassPropsStr = (item) => {
    let arrStr = [];

    for (let i = 0; i < item.props.length; i++) {
        let prop = item.props[i];
        let comment = formatComment(prop['rdfs:comment'], 5);
        let name = getRdfsLabel(prop);
        let types = formatTypesStr(prop.types);
        let str = `
    /**
${comment}
     * @var ${types}
     */
    public $${name};`;
        arrStr.push(str);
    }

    let fullStr = arrStr.join("\r\n");

    return fullStr;
}


const clearFolder = async (folder, exclude = []) => {
    let data = await glob(folder + '/**/*.php');
    let dirs = [];
    for (let i = 0; i < data.length; i++) {
        if (fs.lstatSync(data[i]).isDirectory()) {
            dirs.push(data[i]);
            continue;
        }
        if (exclude.includes(data[i])) {
            continue;
        }
        fs.unlinkSync(data[i]);
    }
    for (let i = 0; i < dirs.length; i++) {
        fs.rmdirSync(dirs[i]);
    }
}


const createDataTypes = (data, extend = BASE_CLASS_DATA_TYPES) => {
    for (let i = 0; i < data.length; i++) {
        let item = data[i];
        let filePath = path.join(PATH_DATA_TYPES, `Data${ucFirst(getRdfsLabel(item))}.php`);
        let content = getDataTypeClassContent(item, extend);
        fs.writeFileSync(filePath, content);
        if (item.children.length) {
            let childExtend = `Data${ucFirst(getRdfsLabel(item))}`;
            createDataTypes(item.children, childExtend);
        }
    }
}


const getDataTypeClassContent = (item, extend = null) => {
    let className = 'Data' + ucFirst(getRdfsLabel(item));
    let comment = formatComment(item['rdfs:comment'], 1);
    let strExtend = extend ? ' extends ' + extend : '';
    let types = DATA_TYPES_TO_PHP[className] && DATA_TYPES_TO_PHP[className].length ? DATA_TYPES_TO_PHP[className].join('|') : 'mixed';
    let str = `<?php

/**
${comment}
 */

namespace ${NAMESPACE_DATA_TYPES};

class ${className}${strExtend}
{

    /**
     * @var ${types}
     */
    protected $value;


    /**
     * @param ${types} $value
     */
    function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return ${types}
     */
    function getValue()
    {
        return parent::getValue();
    }
}
`;
    return str;
}


const getTypesCollection = (data, res) => {
    for (let i = 0; i < data.length; i++) {
        let item = JSON.parse(JSON.stringify(data[i]));
        item.children = [];
        res.push(item);
        if (data[i].children.length) {
            getTypesCollection(data[i].children, res);
        }
    }
}


const fillNamespaces = (data, classNameSpace, classPath, extendClass) => {
    for (let i = 0; i < data.length; i++) {
        let item = data[i];
        let label = getRdfsLabel(item);
        let className = /^\d/.test(label) ? `_${label}` : label;

        let thisNameSpace = classNameSpace;
        let thisPath = classPath;

        if (item.children.length) {
            thisNameSpace = `${classNameSpace}\\${className}`;
            thisPath = `${classPath}/${className}`;
            fillNamespaces(item.children, thisNameSpace, thisPath, `${thisNameSpace}\\${className}`);
        }

        item.namespace = thisNameSpace;
        item.path = thisPath;
        item.className = className;
        item.file = `${thisPath}/${className}.php`;
        item.extend = `\\${extendClass}`;
    }
}


const fillProperties = (collection, items) => {
    for (let i = 0; i < items.length; i++) {
        items[i]['props'] = getClassProps(collection, items[i]['@id']);
        if (items[i].children.length) {
            fillProperties(collection, items[i].children);
        }
    }
}


const getAllDataTypesIds = (dataTypes, res) => {
    for (let i = 0; i < dataTypes.length; i++) {
        res.push(dataTypes[i]['@id']);
        if (dataTypes[i].children.length) {
            getAllDataTypesIds(dataTypes[i].children, res);
        }
    }
}


const getItemChildren = (collection, itemId) => {
    let res = [];
    for (let i = 0; i < collection.length; i++) {
        if (isProperty(collection[i]) || isSupersedesBy(collection[i])) {
            continue;
        }
        if (!getIdProps(collection[i], 'rdfs:subClassOf').includes(itemId) && collection[i]['@type'] !== itemId) {
            continue;
        }
        let item = JSON.parse(JSON.stringify(collection[i]));
        item['children'] = getItemChildren(collection, item['@id']);
        res.push(item);
    }
    return res;
}


const ucFirst = (str) => {
    if (typeof str !== 'string') {
        if (str['@value']) {
            str = str['@value'];
        } else {
            return str;
        }
    }
    return str.charAt(0).toUpperCase() + str.slice(1);
}


/**
* @param {SchemaGraph[]} data 
* @param {string} id 
*/
const getClassProps = (data, id) => {
    let res = [];
    for (let i = 0; i < data.length; i++) {
        let item = data[i];

        if (!isProperty(item) || isSupersedesBy(item)) {
            continue;
        }

        let ids = getIdProps(item, 'schema:domainIncludes');

        if (!ids.includes(id)) {
            continue;
        }

        let typesIds = getIdProps(item, 'schema:rangeIncludes');

        let info = JSON.parse(JSON.stringify(item));

        info['types'] = [];

        for (let j = 0; j < typesIds.length; j++) {
            let type = searchById(data, typesIds[j]);

            if (type === null) {
                continue;
            }

            if (DATA_TYPES_IDS.includes(type['@id'])) {
                info['types'].push(`\\${NAMESPACE_DATA_TYPES}\\Data${ucFirst(getRdfsLabel(type))}`);
            } else {
                let typeData = findTypeInCollection(type['@id']);
                if (typeData) {
                    info['types'].push(`\\${typeData['namespace']}\\${typeData['className']}`);
                }
            }
        }
        res.push(info);
    }
    return res;
}


const findTypeInCollection = (typeId) => {
    for (let i = 0; i < TYPES_COLLECTION.length; i++) {
        if (TYPES_COLLECTION[i]['@id'] === typeId) {
            return TYPES_COLLECTION[i];
        }
    }
    return null;
}


/**
* - Переданный объект описывает класс
* @param {SchemaGraph} item 
* @returns {boolean}
*/
const isClass = (item) => {
    if (item['@type'] === 'rdfs:Class') {
        return true;
    }
    return /^schema\:/.test(item['@type']);
}


/**
* - Переданный объект описывает свойство
* @param {SchemaGraph} item 
* @returns {boolean}
*/
const isProperty = (item) => {
    return item['@type'] === 'rdf:Property';
}


/**
* - Является переданный объект типом данных
* @param {SchemaGraph} item 
* @return {boolean}
*/
const isDataType = (item) => {
    return typeMatch(item, 'schema:DataType');
}

const isRdfsClass = (item) => {
    return typeMatch(item, 'rdfs:Class');
}

const typeMatch = (item, type) => {
    if (typeof item['@type'] === 'string') {
        return item['@type'] === type;
    }
    return item['@type'].includes(type);
}


/**
* - Проверяет был ли переданный объект заменен другим
* @param {SchemaGraph} item 
* @returns {boolean}
*/
const isSupersedesBy = (item) => {
    return getIdProps(item, 'schema:supersededBy').length > 0;
}


/**
* - Получает свойство со значениями '@id'
* @param {SchemaGraph} item 
* @param {string} key 
* @returns {string[]}
*/
const getIdProps = (item, key) => {
    // свойства нет
    if (!item[key]) {
        return [];
    }
    // это объект
    if (item[key]['@id']) {
        return [item[key]['@id']];
    }
    // это массив объектов
    let res = [];
    for (let i = 0; i < item[key].length; i++) {
        res.push(item[key][i]['@id']);
    }
    return res;
}


/**
* - Ищет элемент по его ID
* @param {SchemaGraph[]} data
* @param {string} id 
* @returns {SchemaGraph|null}
*/
const searchById = (data, id) => {
    for (let i = 0; i < data.length; i++) {
        if (data[i]['@id'] === id) {
            return data[i];
        }
    }
    return null;
}

/**
 * 
 * @param {SchemaGraph} item 
 */
const getRdfsLabel = (item) => {
    return getRdfsStringProp(item, 'rdfs:label');
}


/**
 * - Есть свойства, которые должны быть строкой, однако приходят в формате объекта
 * @param {SchemaGraph} item 
 * @param {string} prop 
 */
const getRdfsStringProp = (item, prop) => {
    if (!item[prop]) {
        return '';
    }
    if (typeof item[prop] !== 'string') {
        if (item[prop]['@value']) {
            return item[prop]['@value'];
        }
        return '';
    }
    return item[prop];
}


/**
* @param {string} comment
* @return {string} 
*/
const formatComment = (comment, spaces = 0) => {
    if (typeof comment !== 'string') {
        if (!comment['@value']) {
            return '*';
        }
        comment = comment['@value'];
    }
    if (!comment) {
        return '*';
    }
    let wordsComment = comment.replace(/(\r\n|\n|\r)/img, ' ').replace(/[\s]+/img, ' ').split(' ');
    let lines = [];
    let curLine = 0;
    let perLine = 20;
    let lineWords = 0;
    for (let i = 0; i < wordsComment.length; i++) {
        if (lineWords > perLine) {
            curLine++;
            lineWords = 0;
        }
        if (!lines[curLine]) {
            lines[curLine] = '';
            for (let s = 0; s < spaces; s++) {
                lines[curLine] += ' ';
            }
            lines[curLine] += '*';
        }
        lines[curLine] += ' ' + wordsComment[i];
        lineWords++;
    }
    return lines.join('\n');
}

const start = async () => {
    let data = await fetchData();
    parseData(data);
}

start();