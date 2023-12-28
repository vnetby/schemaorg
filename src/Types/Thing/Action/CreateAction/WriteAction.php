<?php

/**
 * @see https://schema.org/WriteAction
 * The act of authoring written creative content.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\CreateAction;

class WriteAction extends \Vnetby\Schemaorg\Types\Thing\Action\CreateAction\CreateAction
{
    const TYPE = 'WriteAction';

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    protected $prop_inLanguage;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setInLanguage($value)
    {
        return $this->setProp('inLanguage', $value);
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getInLanguage()
    {
        return $this->getProp('inLanguage');
    }
}
