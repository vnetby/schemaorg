<?php

/**
 * @see https://schema.org/DataFeed
 * A single feed providing structured information about one or more entities or topics.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed;

class DataFeed extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset
{
    const TYPE = 'DataFeed';

    /**
     * An item within a data feed. Data feeds may have many elements.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DataFeedItem|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $dataFeedElement;

    /**
     * An item within a data feed. Data feeds may have many elements.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DataFeedItem|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setDataFeedElement($value)
    {
        return $this->setProp('dataFeedElement', $value);
    }

    /**
     * An item within a data feed. Data feeds may have many elements.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DataFeedItem|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getDataFeedElement()
    {
        return $this->getProp('dataFeedElement');
    }
}
