<?php

/**
 * @see https://schema.org/Corporation
 * Organization: A business corporation.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization;

class Corporation extends \Vnetby\Schemaorg\Types\Thing\Organization\Organization
{
    const TYPE = 'Corporation';

    /**
     * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated
     * by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier
     * Codes (MIC) specified in ISO 15022.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_tickerSymbol;

    /**
     * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated
     * by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier
     * Codes (MIC) specified in ISO 15022.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTickerSymbol($value)
    {
        return $this->setProp('tickerSymbol', $value);
    }

    /**
     * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated
     * by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier
     * Codes (MIC) specified in ISO 15022.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTickerSymbol()
    {
        return $this->getProp('tickerSymbol');
    }
}
