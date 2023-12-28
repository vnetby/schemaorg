<?php

/**
* @see https://schema.org/Person
 * A person (alive, dead, undead, or fictional).
*/

namespace Vnetby\Schemaorg\Types\Thing\Person;

class Person extends \Vnetby\Schemaorg\Types\Thing\Thing
{
   const TYPE = 'Person';

   /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
    */
   protected $prop_funding;

   /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership
    */
   protected $prop_memberOf;

   /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text
     * strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used
     * in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not
     * try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType
    */
   protected $prop_gender;

   /**
     * The height of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
    */
   protected $prop_height;

   /**
     * The place where the person died.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_deathPlace;

   /**
     * A pointer to products or services offered by the organization or person.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
    */
   protected $prop_makesOffer;

   /**
     * The telephone number.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_telephone;

   /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_sponsor;

   /**
     * Products owned by the organization or person.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OwnershipInfo|\Vnetby\Schemaorg\Types\Thing\Product\Product
    */
   protected $prop_owns;

   /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\OfferCatalog
    */
   protected $prop_hasOfferCatalog;

   /**
     * A contact location for a person's residence.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
    */
   protected $prop_homeLocation;

   /**
     * A contact location for a person's place of work.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_workLocation;

   /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_globalLocationNumber;

   /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_naics;

   /**
     * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_honorificSuffix;

   /**
     * Email address.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_email;

   /**
     * The person's spouse.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_spouse;

   /**
     * The weight of the product or person.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_weight;

   /**
     * The Value-added Tax ID of the organization or person.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_vatID;

   /**
     * A colleague of the person.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_colleague;

   /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_taxID;

   /**
     * Family name. In the U.S., the last name of a Person.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_familyName;

   /**
     * The fax number.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_faxNumber;

   /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise
     * but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]]
     * descriptions.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_knowsAbout;

   /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_honorificPrefix;

   /**
     * Date of birth.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_birthDate;

   /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_brand;

   /**
     * The job title of the person (for example, Financial Manager).
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_jobTitle;

   /**
     * The most generic uni-directional social relation.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_follows;

   /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter
    */
   protected $prop_interactionStatistic;

   /**
     * The place where the person was born.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_birthPlace;

   /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_funder;

   /**
     * A parent of this person.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_parent;

   /**
     * Event that this person is a performer or participant in.
    * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
    */
   protected $prop_performerIn;

   /**
     * An additional name for a Person, can be used for a middle name.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_additionalName;

   /**
     * Organizations that the person works for.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_worksFor;

   /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the
     * statistic), and in a particular context (i.e. interactionService).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter
    */
   protected $prop_agentInteractionStatistic;

   /**
     * Nationality of the person.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country
    */
   protected $prop_nationality;

   /**
     * A pointer to products or services sought by the organization or person (demand).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Demand
    */
   protected $prop_seeks;

   /**
     * A credential awarded to the Person or Organization.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential
    */
   protected $prop_hasCredential;

   /**
     * Physical address of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_address;

   /**
     * A contact point for a person or organization.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
    */
   protected $prop_contactPoint;

   /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
    */
   protected $prop_knowsLanguage;

   /**
     * The most generic bi-directional social/work relation.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_knows;

   /**
     * Points-of-Sales operated by the organization or person.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_hasPOS;

   /**
     * The most generic familial relation.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_relatedTo;

   /**
     * The Person's occupation. For past professions, use Role for expressing dates.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Occupation
    */
   protected $prop_hasOccupation;

   /**
     * An organization that the person is an alumni of.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Organization\EducationalOrganization\EducationalOrganization
    */
   protected $prop_alumniOf;

   /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
    */
   protected $prop_netWorth;

   /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_callSign;

   /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_isicV4;

   /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_affiliation;

   /**
     * Date of death.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_deathDate;

   /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_duns;

   /**
     * An award won by or for this item.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_award;

   /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_publishingPrinciples;

   /**
     * A sibling of the person.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_sibling;

   /**
     * A child of the person.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_children;

   /**
     * Given name. In the U.S., the first name of a Person.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_givenName;

   /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant $value
    * @return static
    */
   function setFunding($value)
   {
       return $this->setProp('funding', $value);
   }

   /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership $value
    * @return static
    */
   function setMemberOf($value)
   {
       return $this->setProp('memberOf', $value);
   }

   /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text
     * strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used
     * in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not
     * try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType $value
    * @return static
    */
   function setGender($value)
   {
       return $this->setProp('gender', $value);
   }

   /**
     * The height of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
    * @return static
    */
   function setHeight($value)
   {
       return $this->setProp('height', $value);
   }

   /**
     * The place where the person died.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setDeathPlace($value)
   {
       return $this->setProp('deathPlace', $value);
   }

   /**
     * A pointer to products or services offered by the organization or person.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
    * @return static
    */
   function setMakesOffer($value)
   {
       return $this->setProp('makesOffer', $value);
   }

   /**
     * The telephone number.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTelephone($value)
   {
       return $this->setProp('telephone', $value);
   }

   /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setSponsor($value)
   {
       return $this->setProp('sponsor', $value);
   }

   /**
     * Products owned by the organization or person.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OwnershipInfo|\Vnetby\Schemaorg\Types\Thing\Product\Product $value
    * @return static
    */
   function setOwns($value)
   {
       return $this->setProp('owns', $value);
   }

   /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\OfferCatalog $value
    * @return static
    */
   function setHasOfferCatalog($value)
   {
       return $this->setProp('hasOfferCatalog', $value);
   }

   /**
     * A contact location for a person's residence.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
    * @return static
    */
   function setHomeLocation($value)
   {
       return $this->setProp('homeLocation', $value);
   }

   /**
     * A contact location for a person's place of work.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setWorkLocation($value)
   {
       return $this->setProp('workLocation', $value);
   }

   /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setGlobalLocationNumber($value)
   {
       return $this->setProp('globalLocationNumber', $value);
   }

   /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setNaics($value)
   {
       return $this->setProp('naics', $value);
   }

   /**
     * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setHonorificSuffix($value)
   {
       return $this->setProp('honorificSuffix', $value);
   }

   /**
     * Email address.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setEmail($value)
   {
       return $this->setProp('email', $value);
   }

   /**
     * The person's spouse.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setSpouse($value)
   {
       return $this->setProp('spouse', $value);
   }

   /**
     * The weight of the product or person.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setWeight($value)
   {
       return $this->setProp('weight', $value);
   }

   /**
     * The Value-added Tax ID of the organization or person.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setVatID($value)
   {
       return $this->setProp('vatID', $value);
   }

   /**
     * A colleague of the person.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setColleague($value)
   {
       return $this->setProp('colleague', $value);
   }

   /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTaxID($value)
   {
       return $this->setProp('taxID', $value);
   }

   /**
     * Family name. In the U.S., the last name of a Person.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setFamilyName($value)
   {
       return $this->setProp('familyName', $value);
   }

   /**
     * The fax number.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setFaxNumber($value)
   {
       return $this->setProp('faxNumber', $value);
   }

   /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise
     * but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]]
     * descriptions.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setKnowsAbout($value)
   {
       return $this->setProp('knowsAbout', $value);
   }

   /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setHonorificPrefix($value)
   {
       return $this->setProp('honorificPrefix', $value);
   }

   /**
     * Date of birth.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setBirthDate($value)
   {
       return $this->setProp('birthDate', $value);
   }

   /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setBrand($value)
   {
       return $this->setProp('brand', $value);
   }

   /**
     * The job title of the person (for example, Financial Manager).
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setJobTitle($value)
   {
       return $this->setProp('jobTitle', $value);
   }

   /**
     * The most generic uni-directional social relation.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setFollows($value)
   {
       return $this->setProp('follows', $value);
   }

   /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter $value
    * @return static
    */
   function setInteractionStatistic($value)
   {
       return $this->setProp('interactionStatistic', $value);
   }

   /**
     * The place where the person was born.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setBirthPlace($value)
   {
       return $this->setProp('birthPlace', $value);
   }

   /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setFunder($value)
   {
       return $this->setProp('funder', $value);
   }

   /**
     * A parent of this person.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setParent($value)
   {
       return $this->setProp('parent', $value);
   }

   /**
     * Event that this person is a performer or participant in.
    * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
    * @return static
    */
   function setPerformerIn($value)
   {
       return $this->setProp('performerIn', $value);
   }

   /**
     * An additional name for a Person, can be used for a middle name.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAdditionalName($value)
   {
       return $this->setProp('additionalName', $value);
   }

   /**
     * Organizations that the person works for.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setWorksFor($value)
   {
       return $this->setProp('worksFor', $value);
   }

   /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the
     * statistic), and in a particular context (i.e. interactionService).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter $value
    * @return static
    */
   function setAgentInteractionStatistic($value)
   {
       return $this->setProp('agentInteractionStatistic', $value);
   }

   /**
     * Nationality of the person.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country $value
    * @return static
    */
   function setNationality($value)
   {
       return $this->setProp('nationality', $value);
   }

   /**
     * A pointer to products or services sought by the organization or person (demand).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Demand $value
    * @return static
    */
   function setSeeks($value)
   {
       return $this->setProp('seeks', $value);
   }

   /**
     * A credential awarded to the Person or Organization.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential $value
    * @return static
    */
   function setHasCredential($value)
   {
       return $this->setProp('hasCredential', $value);
   }

   /**
     * Physical address of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAddress($value)
   {
       return $this->setProp('address', $value);
   }

   /**
     * A contact point for a person or organization.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
    * @return static
    */
   function setContactPoint($value)
   {
       return $this->setProp('contactPoint', $value);
   }

   /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
    * @return static
    */
   function setKnowsLanguage($value)
   {
       return $this->setProp('knowsLanguage', $value);
   }

   /**
     * The most generic bi-directional social/work relation.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setKnows($value)
   {
       return $this->setProp('knows', $value);
   }

   /**
     * Points-of-Sales operated by the organization or person.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setHasPOS($value)
   {
       return $this->setProp('hasPOS', $value);
   }

   /**
     * The most generic familial relation.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setRelatedTo($value)
   {
       return $this->setProp('relatedTo', $value);
   }

   /**
     * The Person's occupation. For past professions, use Role for expressing dates.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Occupation $value
    * @return static
    */
   function setHasOccupation($value)
   {
       return $this->setProp('hasOccupation', $value);
   }

   /**
     * An organization that the person is an alumni of.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Organization\EducationalOrganization\EducationalOrganization $value
    * @return static
    */
   function setAlumniOf($value)
   {
       return $this->setProp('alumniOf', $value);
   }

   /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
    * @return static
    */
   function setNetWorth($value)
   {
       return $this->setProp('netWorth', $value);
   }

   /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setCallSign($value)
   {
       return $this->setProp('callSign', $value);
   }

   /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setIsicV4($value)
   {
       return $this->setProp('isicV4', $value);
   }

   /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setAffiliation($value)
   {
       return $this->setProp('affiliation', $value);
   }

   /**
     * Date of death.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setDeathDate($value)
   {
       return $this->setProp('deathDate', $value);
   }

   /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setDuns($value)
   {
       return $this->setProp('duns', $value);
   }

   /**
     * An award won by or for this item.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAward($value)
   {
       return $this->setProp('award', $value);
   }

   /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setPublishingPrinciples($value)
   {
       return $this->setProp('publishingPrinciples', $value);
   }

   /**
     * A sibling of the person.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setSibling($value)
   {
       return $this->setProp('sibling', $value);
   }

   /**
     * A child of the person.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setChildren($value)
   {
       return $this->setProp('children', $value);
   }

   /**
     * Given name. In the U.S., the first name of a Person.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setGivenName($value)
   {
       return $this->setProp('givenName', $value);
   }

   /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant|null
    */
   function getFunding()
   {
       return $this->getProp('funding');
   }

   /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\ProgramMembership|null
    */
   function getMemberOf()
   {
       return $this->getProp('memberOf');
   }

   /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text
     * strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used
     * in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not
     * try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GenderType\GenderType|null
    */
   function getGender()
   {
       return $this->getProp('gender');
   }

   /**
     * The height of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
    */
   function getHeight()
   {
       return $this->getProp('height');
   }

   /**
     * The place where the person died.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getDeathPlace()
   {
       return $this->getProp('deathPlace');
   }

   /**
     * A pointer to products or services offered by the organization or person.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
    */
   function getMakesOffer()
   {
       return $this->getProp('makesOffer');
   }

   /**
     * The telephone number.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTelephone()
   {
       return $this->getProp('telephone');
   }

   /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical
     * Study or a corporate sponsor of an event.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getSponsor()
   {
       return $this->getProp('sponsor');
   }

   /**
     * Products owned by the organization or person.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OwnershipInfo|\Vnetby\Schemaorg\Types\Thing\Product\Product|null
    */
   function getOwns()
   {
       return $this->getProp('owns');
   }

   /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\OfferCatalog|null
    */
   function getHasOfferCatalog()
   {
       return $this->getProp('hasOfferCatalog');
   }

   /**
     * A contact location for a person's residence.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
    */
   function getHomeLocation()
   {
       return $this->getProp('homeLocation');
   }

   /**
     * A contact location for a person's place of work.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getWorkLocation()
   {
       return $this->getProp('workLocation');
   }

   /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or
     * place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getGlobalLocationNumber()
   {
       return $this->getProp('globalLocationNumber');
   }

   /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getNaics()
   {
       return $this->getProp('naics');
   }

   /**
     * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getHonorificSuffix()
   {
       return $this->getProp('honorificSuffix');
   }

   /**
     * Email address.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getEmail()
   {
       return $this->getProp('email');
   }

   /**
     * The person's spouse.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getSpouse()
   {
       return $this->getProp('spouse');
   }

   /**
     * The weight of the product or person.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getWeight()
   {
       return $this->getProp('weight');
   }

   /**
     * The Value-added Tax ID of the organization or person.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getVatID()
   {
       return $this->getProp('vatID');
   }

   /**
     * A colleague of the person.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getColleague()
   {
       return $this->getProp('colleague');
   }

   /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTaxID()
   {
       return $this->getProp('taxID');
   }

   /**
     * Family name. In the U.S., the last name of a Person.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getFamilyName()
   {
       return $this->getProp('familyName');
   }

   /**
     * The fax number.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getFaxNumber()
   {
       return $this->getProp('faxNumber');
   }

   /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise
     * but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]]
     * descriptions.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getKnowsAbout()
   {
       return $this->getProp('knowsAbout');
   }

   /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getHonorificPrefix()
   {
       return $this->getProp('honorificPrefix');
   }

   /**
     * Date of birth.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getBirthDate()
   {
       return $this->getProp('birthDate');
   }

   /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Brand|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getBrand()
   {
       return $this->getProp('brand');
   }

   /**
     * The job title of the person (for example, Financial Manager).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getJobTitle()
   {
       return $this->getProp('jobTitle');
   }

   /**
     * The most generic uni-directional social relation.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getFollows()
   {
       return $this->getProp('follows');
   }

   /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be
     * used.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter|null
    */
   function getInteractionStatistic()
   {
       return $this->getProp('interactionStatistic');
   }

   /**
     * The place where the person was born.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getBirthPlace()
   {
       return $this->getProp('birthPlace');
   }

   /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getFunder()
   {
       return $this->getProp('funder');
   }

   /**
     * A parent of this person.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getParent()
   {
       return $this->getProp('parent');
   }

   /**
     * Event that this person is a performer or participant in.
    * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
    */
   function getPerformerIn()
   {
       return $this->getProp('performerIn');
   }

   /**
     * An additional name for a Person, can be used for a middle name.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAdditionalName()
   {
       return $this->getProp('additionalName');
   }

   /**
     * Organizations that the person works for.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getWorksFor()
   {
       return $this->getProp('worksFor');
   }

   /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the
     * statistic), and in a particular context (i.e. interactionService).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\InteractionCounter|null
    */
   function getAgentInteractionStatistic()
   {
       return $this->getProp('agentInteractionStatistic');
   }

   /**
     * Nationality of the person.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\Country|null
    */
   function getNationality()
   {
       return $this->getProp('nationality');
   }

   /**
     * A pointer to products or services sought by the organization or person (demand).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|null
    */
   function getSeeks()
   {
       return $this->getProp('seeks');
   }

   /**
     * A credential awarded to the Person or Organization.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|null
    */
   function getHasCredential()
   {
       return $this->getProp('hasCredential');
   }

   /**
     * Physical address of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAddress()
   {
       return $this->getProp('address');
   }

   /**
     * A contact point for a person or organization.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
    */
   function getContactPoint()
   {
       return $this->getProp('contactPoint');
   }

   /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
    */
   function getKnowsLanguage()
   {
       return $this->getProp('knowsLanguage');
   }

   /**
     * The most generic bi-directional social/work relation.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getKnows()
   {
       return $this->getProp('knows');
   }

   /**
     * Points-of-Sales operated by the organization or person.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getHasPOS()
   {
       return $this->getProp('hasPOS');
   }

   /**
     * The most generic familial relation.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getRelatedTo()
   {
       return $this->getProp('relatedTo');
   }

   /**
     * The Person's occupation. For past professions, use Role for expressing dates.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Occupation|null
    */
   function getHasOccupation()
   {
       return $this->getProp('hasOccupation');
   }

   /**
     * An organization that the person is an alumni of.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Organization\EducationalOrganization\EducationalOrganization|null
    */
   function getAlumniOf()
   {
       return $this->getProp('alumniOf');
   }

   /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
    */
   function getNetWorth()
   {
       return $this->getProp('netWorth');
   }

   /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getCallSign()
   {
       return $this->getProp('callSign');
   }

   /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or
     * place.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getIsicV4()
   {
       return $this->getProp('isicV4');
   }

   /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getAffiliation()
   {
       return $this->getProp('affiliation');
   }

   /**
     * Date of death.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getDeathDate()
   {
       return $this->getProp('deathDate');
   }

   /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getDuns()
   {
       return $this->getProp('duns');
   }

   /**
     * An award won by or for this item.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAward()
   {
       return $this->getProp('award');
   }

   /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]]
     * writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]]
     * (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are
     * most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. 
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getPublishingPrinciples()
   {
       return $this->getProp('publishingPrinciples');
   }

   /**
     * A sibling of the person.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getSibling()
   {
       return $this->getProp('sibling');
   }

   /**
     * A child of the person.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getChildren()
   {
       return $this->getProp('children');
   }

   /**
     * Given name. In the U.S., the first name of a Person.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getGivenName()
   {
       return $this->getProp('givenName');
   }
}
