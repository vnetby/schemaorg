<?php

/**
 * @see https://schema.org/SearchAction
 * The act of searching for an object.\n\nRelated actions:\n\n* [[FindAction]]: SearchAction generally leads to a FindAction, but not necessarily.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action;

class SearchAction extends \Vnetby\Schemaorg\Types\Thing\Action\Action
{
    const TYPE = 'SearchAction';

    /**
     * A sub property of instrument. The query used on this action.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_query;

    /**
     * A sub property of instrument. The query used on this action.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setQuery($value)
    {
        return $this->setProp('query', $value);
    }

    /**
     * A sub property of instrument. The query used on this action.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getQuery()
    {
        return $this->getProp('query');
    }
}
