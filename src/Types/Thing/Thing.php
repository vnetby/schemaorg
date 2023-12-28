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
     * A CreativeWork or Event about this Thing.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_subjectOf;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_mainEntityOfPage;

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org
     * provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for
     * more details. 
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_identifier;

    /**
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_image;

    /**
     * The name of the item.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_name;

    /**
     * URL of the item.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_url;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata
     * entry, or official website.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_sameAs;

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other
     * properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_disambiguatingDescription;

    /**
     * An alias for the item.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_alternateName;

    /**
     * A description of the item.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\TextObject
     */
    protected $prop_description;

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     * @var \Vnetby\Schemaorg\Types\Thing\Action\Action
     */
    protected $prop_potentialAction;

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and
     * in this case corresponds to the use of rdf:type in RDF. Text values can be used sparingly, for cases where useful
     * information can be added without their being an appropriate schema to reference. In the case of text values, the class label
     * should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_additionalType;

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
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setMainEntityOfPage($value)
    {
        return $this->setProp('mainEntityOfPage', $value);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org
     * provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for
     * more details. 
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIdentifier($value)
    {
        return $this->setProp('identifier', $value);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setImage($value)
    {
        return $this->setProp('image', $value);
    }

    /**
     * The name of the item.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setName($value)
    {
        return $this->setProp('name', $value);
    }

    /**
     * URL of the item.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setUrl($value)
    {
        return $this->setProp('url', $value);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata
     * entry, or official website.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setSameAs($value)
    {
        return $this->setProp('sameAs', $value);
    }

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other
     * properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDisambiguatingDescription($value)
    {
        return $this->setProp('disambiguatingDescription', $value);
    }

    /**
     * An alias for the item.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlternateName($value)
    {
        return $this->setProp('alternateName', $value);
    }

    /**
     * A description of the item.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\TextObject $value
     * @return static
     */
    function setDescription($value)
    {
        return $this->setProp('description', $value);
    }

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
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and
     * in this case corresponds to the use of rdf:type in RDF. Text values can be used sparingly, for cases where useful
     * information can be added without their being an appropriate schema to reference. In the case of text values, the class label
     * should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAdditionalType($value)
    {
        return $this->setProp('additionalType', $value);
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
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getMainEntityOfPage()
    {
        return $this->getProp('mainEntityOfPage');
    }

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org
     * provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for
     * more details. 
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIdentifier()
    {
        return $this->getProp('identifier');
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getImage()
    {
        return $this->getProp('image');
    }

    /**
     * The name of the item.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getName()
    {
        return $this->getProp('name');
    }

    /**
     * URL of the item.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getUrl()
    {
        return $this->getProp('url');
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata
     * entry, or official website.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getSameAs()
    {
        return $this->getProp('sameAs');
    }

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other
     * properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDisambiguatingDescription()
    {
        return $this->getProp('disambiguatingDescription');
    }

    /**
     * An alias for the item.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlternateName()
    {
        return $this->getProp('alternateName');
    }

    /**
     * A description of the item.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\TextObject|null
     */
    function getDescription()
    {
        return $this->getProp('description');
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
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and
     * in this case corresponds to the use of rdf:type in RDF. Text values can be used sparingly, for cases where useful
     * information can be added without their being an appropriate schema to reference. In the case of text values, the class label
     * should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAdditionalType()
    {
        return $this->getProp('additionalType');
    }
}
