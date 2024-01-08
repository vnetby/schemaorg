<?php

/**
 * @see https://schema.org/Book
 * A book.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Book;

class Book extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Book';

    /**
     * The edition of the book.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $bookEdition;

    /**
     * Indicates whether the book is an abridged edition.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $abridged;

    /**
     * The format of the book.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BookFormatType\BookFormatType
     */
    public $bookFormat;

    /**
     * The number of pages in the book.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfPages;

    /**
     * The illustrator of the book.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $illustrator;

    /**
     * The ISBN of the book.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $isbn;

    /**
     * The edition of the book.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBookEdition($value)
    {
        return $this->setProp('bookEdition', $value);
    }

    /**
     * Indicates whether the book is an abridged edition.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setAbridged($value)
    {
        return $this->setProp('abridged', $value);
    }

    /**
     * The format of the book.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BookFormatType\BookFormatType $value
     * @return static
     */
    function setBookFormat($value)
    {
        return $this->setProp('bookFormat', $value);
    }

    /**
     * The number of pages in the book.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfPages($value)
    {
        return $this->setProp('numberOfPages', $value);
    }

    /**
     * The illustrator of the book.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setIllustrator($value)
    {
        return $this->setProp('illustrator', $value);
    }

    /**
     * The ISBN of the book.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIsbn($value)
    {
        return $this->setProp('isbn', $value);
    }

    /**
     * The edition of the book.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBookEdition()
    {
        return $this->getProp('bookEdition');
    }

    /**
     * Indicates whether the book is an abridged edition.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getAbridged()
    {
        return $this->getProp('abridged');
    }

    /**
     * The format of the book.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BookFormatType\BookFormatType|null
     */
    function getBookFormat()
    {
        return $this->getProp('bookFormat');
    }

    /**
     * The number of pages in the book.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumberOfPages()
    {
        return $this->getProp('numberOfPages');
    }

    /**
     * The illustrator of the book.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getIllustrator()
    {
        return $this->getProp('illustrator');
    }

    /**
     * The ISBN of the book.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIsbn()
    {
        return $this->getProp('isbn');
    }
}
