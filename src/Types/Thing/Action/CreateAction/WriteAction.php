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
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $inLanguage;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInLanguage($value)
    {
        return $this->setProp('inLanguage', $value);
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInLanguage()
    {
        return $this->getProp('inLanguage');
    }
}
