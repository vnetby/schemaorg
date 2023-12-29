<?php

/**
 * @see https://schema.org/ItemList
 * A list of items of any sort&#x2014;for example, Top 10 Movies About Weathermen, or Top 100 Party Songs. Not to be
 * confused with HTML lists, which are often used only for formatting.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\ItemList;

class ItemList extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'ItemList';

    /**
     * The number of items in an ItemList. Note that some descriptions might not fully describe all items in a list (e.g.,
     * multi-page pagination); in such cases, the numberOfItems would be for the entire list.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfItems;

    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"), existing entities, or use ListItem.\n\nText values are best if
     * the elements in the list are plain strings. Existing entities are best for a simple, unordered list of existing things in
     * your data. ListItem is used with ordered lists when you want to provide additional context about the element in that list
     * or when the same item might be in different places in different lists.\n\nNote: The order of elements in your mark-up is
     * not sufficient for indicating the order or elements. Use ListItem with a 'position' property in such cases.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $itemListElement;

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ItemListOrderType\ItemListOrderType|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $itemListOrder;

    /**
     * The number of items in an ItemList. Note that some descriptions might not fully describe all items in a list (e.g.,
     * multi-page pagination); in such cases, the numberOfItems would be for the entire list.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfItems($value)
    {
        return $this->setProp('numberOfItems', $value);
    }

    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"), existing entities, or use ListItem.\n\nText values are best if
     * the elements in the list are plain strings. Existing entities are best for a simple, unordered list of existing things in
     * your data. ListItem is used with ordered lists when you want to provide additional context about the element in that list
     * or when the same item might be in different places in different lists.\n\nNote: The order of elements in your mark-up is
     * not sufficient for indicating the order or elements. Use ListItem with a 'position' property in such cases.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setItemListElement($value)
    {
        return $this->setProp('itemListElement', $value);
    }

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ItemListOrderType\ItemListOrderType|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setItemListOrder($value)
    {
        return $this->setProp('itemListOrder', $value);
    }

    /**
     * The number of items in an ItemList. Note that some descriptions might not fully describe all items in a list (e.g.,
     * multi-page pagination); in such cases, the numberOfItems would be for the entire list.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumberOfItems()
    {
        return $this->getProp('numberOfItems');
    }

    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"), existing entities, or use ListItem.\n\nText values are best if
     * the elements in the list are plain strings. Existing entities are best for a simple, unordered list of existing things in
     * your data. ListItem is used with ordered lists when you want to provide additional context about the element in that list
     * or when the same item might be in different places in different lists.\n\nNote: The order of elements in your mark-up is
     * not sufficient for indicating the order or elements. Use ListItem with a 'position' property in such cases.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getItemListElement()
    {
        return $this->getProp('itemListElement');
    }

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\ItemListOrderType\ItemListOrderType|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getItemListOrder()
    {
        return $this->getProp('itemListOrder');
    }
}
