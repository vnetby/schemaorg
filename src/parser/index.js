#! /bin/node

/**
 * - Парсит и создает классы типов с schema.org
 */

import fetch from "node-fetch";
import { JSDOM } from "jsdom";
import fs from "fs";
import path from "path";

import * as url from 'url';
const __filename = url.fileURLToPath(import.meta.url);
const __dirname = url.fileURLToPath(new URL('.', import.meta.url));

// урл с иерархичеким меню типов schema.org
const SCHEMA_ORG_URL = 'https://schema.org/docs/full.html';

// базовый урл schema.org без закрывающего /
const SCHEMA_ORG_BASE_URL = 'https://schema.org';

// базовое пространство имен
const NAMEPSACE_PREFIX = 'Vnet\\Schemaorg\\Types';

// полное наименование базового класса (с пространством имен)
const BASE_CLASS = 'Vnet\\Schemaorg\\Types\\Type';

// папка в которой будет создаваться структура
const STRUCTURE_DIR = path.resolve(__dirname, '../Types');

const getData = async () => {
    let res = await fetch(SCHEMA_ORG_URL);
    let html = await res.text();
    let menu = parseHtml(html);
    return menu;
}

const createStructure = (info, menu, dir, namespace, parentClass) => {
    if (!info.new) {
        info.new = 0;
    }
    if (!info.exists) {
        info.exists = 0;
    }
    for (let i = 0; i < menu.length; i++) {
        let menuItem = menu[i];
        let name = menuItem.name;
        if (/^\d/.test(name)) {
            name = `_${name}`;
        }
        let url = menuItem.url;
        let filePath = dir;
        let fileNamespace = namespace;
        if (menuItem.children.length) {
            filePath = path.join(filePath, name);
            fileNamespace = `${fileNamespace}\\${name}`;
        }
        if (!fs.existsSync(filePath)) {
            fs.mkdirSync(filePath, { recursive: true });
        }
        let file = path.join(filePath, `${name}.php`);
        if (fs.existsSync(file)) {
            info.exists++;
        } else {
            createFile(file, url, fileNamespace, name, parentClass);
            info.new++;
        }
        if (menuItem.children.length) {
            createStructure(info, menuItem.children, filePath, fileNamespace, `${fileNamespace}\\${name}`);
        }
    }
}


const createFile = (file, url, fileNamespace, fileName, parentClass) => {
    let content = makeFileContent(url, fileNamespace, fileName, parentClass);
    fs.writeFileSync(file, content);
}


const makeFileContent = (url, fileNamespace, fileName, parentClass) => {
    let docUrl = `${SCHEMA_ORG_BASE_URL}${url}`
    let template = `<?php

/**
 * @see ${docUrl}
 */

namespace ${fileNamespace};

class ${fileName} extends \\${parentClass}
{
    const TYPE = '${fileName}';
}
`;

    return template;
}


const parseHtml = (html) => {
    let doc = new JSDOM(html).window.document;
    let menu = doc.querySelector('#tree1');
    if (!menu) {
        return [];
    }
    let res = parseMenu(menu);
    return res;
}

const parseMenu = (menu) => {
    let lis = menu.children;
    let res = [];

    for (let i = 0; i < lis.length; i++) {
        let li = lis[i];
        if (!li.tagName || li.tagName !== 'LI') {
            continue;
        }
        let a = li.querySelector('a');
        if (!a) {
            continue;
        }
        let name = a.innerHTML.trim();
        let url = a.getAttribute('href').trim();
        let subMenu = li.querySelector('.dttSubTree');
        let data = {
            name,
            url,
            children: subMenu ? parseMenu(subMenu) : []
        };
        res.push(data);
    }

    return res;
}

const start = async () => {
    let data = await getData();
    let info = {};
    createStructure(info, data, STRUCTURE_DIR, NAMEPSACE_PREFIX, BASE_CLASS);
    console.log(info);
}

start();