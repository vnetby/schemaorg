<?php

/**
 * @see https://schema.org/EducationalOccupationalCredential
 * An educational or occupational credential. A diploma, academic degree, certification, qualification, badge, etc., that may be awarded to a person or
 * other entity that meets the requirements defined by the credentialer.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class EducationalOccupationalCredential extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'EducationalOccupationalCredential';

    /**
     * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance
     * or accreditation.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $recognizedBy;

    /**
     * The duration of validity of a permit or similar thing.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $validFor;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $educationalLevel;

    /**
     * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $credentialCategory;

    /**
     * The geographic area where a permit or similar thing is valid.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    public $validIn;

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $competencyRequired;

    /**
     * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance
     * or accreditation.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setRecognizedBy($value)
    {
        return $this->setProp('recognizedBy', $value);
    }

    /**
     * The duration of validity of a permit or similar thing.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setValidFor($value)
    {
        return $this->setProp('validFor', $value);
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setEducationalLevel($value)
    {
        return $this->setProp('educationalLevel', $value);
    }

    /**
     * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setCredentialCategory($value)
    {
        return $this->setProp('credentialCategory', $value);
    }

    /**
     * The geographic area where a permit or similar thing is valid.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
     * @return static
     */
    function setValidIn($value)
    {
        return $this->setProp('validIn', $value);
    }

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setCompetencyRequired($value)
    {
        return $this->setProp('competencyRequired', $value);
    }

    /**
     * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance
     * or accreditation.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getRecognizedBy()
    {
        return $this->getProp('recognizedBy');
    }

    /**
     * The duration of validity of a permit or similar thing.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getValidFor()
    {
        return $this->getProp('validFor');
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getEducationalLevel()
    {
        return $this->getProp('educationalLevel');
    }

    /**
     * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getCredentialCategory()
    {
        return $this->getProp('credentialCategory');
    }

    /**
     * The geographic area where a permit or similar thing is valid.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
     */
    function getValidIn()
    {
        return $this->getProp('validIn');
    }

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getCompetencyRequired()
    {
        return $this->getProp('competencyRequired');
    }
}
