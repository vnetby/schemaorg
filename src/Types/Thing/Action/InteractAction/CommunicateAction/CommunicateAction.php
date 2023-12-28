<?php

/**
* @see https://schema.org/CommunicateAction
 * The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction;

class CommunicateAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\InteractAction
{
   const TYPE = 'CommunicateAction';

   /**
     * The subject matter of the content.
    * @var \Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_about;

   /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
    */
   protected $prop_inLanguage;

   /**
     * A sub property of participant. The participant who is at the receiving end of the action.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
    */
   protected $prop_recipient;

   /**
     * The subject matter of the content.
    * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setAbout($value)
   {
       return $this->setProp('about', $value);
   }

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
     * A sub property of participant. The participant who is at the receiving end of the action.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
    * @return static
    */
   function setRecipient($value)
   {
       return $this->setProp('recipient', $value);
   }

   /**
     * The subject matter of the content.
    * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getAbout()
   {
       return $this->getProp('about');
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

   /**
     * A sub property of participant. The participant who is at the receiving end of the action.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
    */
   function getRecipient()
   {
       return $this->getProp('recipient');
   }
}
