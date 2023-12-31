<?php

/**
 * @see https://schema.org/Thing
 * The most generic type of item.
 */

namespace Vnetby\Schemaorg\Types\Thing;

class Thing extends \Vnetby\Schemaorg\Types\Type
{
    const TYPE = 'Thing';

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     * @var \Vnetby\Schemaorg\Types\Thing\Action\Action
     */
    public $potentialAction;

    /**
     * A CreativeWork or Event about this Thing.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $subjectOf;

    /**
     * A description of the item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\TextObject
     */
    public $description;

    /**
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject
     */
    public $image;

    /**
     * An alias for the item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $alternateName;

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other
     * properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $disambiguatingDescription;

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and
     * in this case corresponds to the use of rdf:type in RDF. Text values can be used sparingly, for cases where useful
     * information can be added without their being an appropriate schema to reference. In the case of text values, the class label
     * should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $additionalType;

    /**
     * URL of the item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $url;

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org
     * provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for
     * more details. 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
     */
    public $identifier;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata
     * entry, or official website.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $sameAs;

    /**
     * The name of the item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $name;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $mainEntityOfPage;

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     * @param \Vnetby\Schemaorg\Types\Thing\Action\Action $value
     * @return static
     */
    function setPotentialAction($value)
    {
        return $this->setProp('potentialAction', $value);
    }

    /**
     * A CreativeWork or Event about this Thing.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setSubjectOf($value)
    {
        return $this->setProp('subjectOf', $value);
    }

    /**
     * A description of the item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\TextObject $value
     * @return static
     */
    function setDescription($value)
    {
        return $this->setProp('description', $value);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject $value
     * @return static
     */
    function setImage($value)
    {
        return $this->setProp('image', $value);
    }

    /**
     * An alias for the item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlternateName($value)
    {
        return $this->setProp('alternateName', $value);
    }

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other
     * properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDisambiguatingDescription($value)
    {
        return $this->setProp('disambiguatingDescription', $value);
    }

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and
     * in this case corresponds to the use of rdf:type in RDF. Text values can be used sparingly, for cases where useful
     * information can be added without their being an appropriate schema to reference. In the case of text values, the class label
     * should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAdditionalType($value)
    {
        return $this->setProp('additionalType', $value);
    }

    /**
     * URL of the item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setUrl($value)
    {
        return $this->setProp('url', $value);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org
     * provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for
     * more details. 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue $value
     * @return static
     */
    function setIdentifier($value)
    {
        return $this->setProp('identifier', $value);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata
     * entry, or official website.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setSameAs($value)
    {
        return $this->setProp('sameAs', $value);
    }

    /**
     * The name of the item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setName($value)
    {
        return $this->setProp('name', $value);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setMainEntityOfPage($value)
    {
        return $this->setProp('mainEntityOfPage', $value);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     * @return \Vnetby\Schemaorg\Types\Thing\Action\Action|null
     */
    function getPotentialAction()
    {
        return $this->getProp('potentialAction');
    }

    /**
     * A CreativeWork or Event about this Thing.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getSubjectOf()
    {
        return $this->getProp('subjectOf');
    }

    /**
     * A description of the item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\TextObject|null
     */
    function getDescription()
    {
        return $this->getProp('description');
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|null
     */
    function getImage()
    {
        return $this->getProp('image');
    }

    /**
     * An alias for the item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlternateName()
    {
        return $this->getProp('alternateName');
    }

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other
     * properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDisambiguatingDescription()
    {
        return $this->getProp('disambiguatingDescription');
    }

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and
     * in this case corresponds to the use of rdf:type in RDF. Text values can be used sparingly, for cases where useful
     * information can be added without their being an appropriate schema to reference. In the case of text values, the class label
     * should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAdditionalType()
    {
        return $this->getProp('additionalType');
    }

    /**
     * URL of the item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getUrl()
    {
        return $this->getProp('url');
    }

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org
     * provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for
     * more details. 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|null
     */
    function getIdentifier()
    {
        return $this->getProp('identifier');
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata
     * entry, or official website.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getSameAs()
    {
        return $this->getProp('sameAs');
    }

    /**
     * The name of the item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getName()
    {
        return $this->getProp('name');
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getMainEntityOfPage()
    {
        return $this->getProp('mainEntityOfPage');
    }
}
