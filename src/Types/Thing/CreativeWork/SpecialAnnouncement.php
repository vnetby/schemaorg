<?php

/**
* @see https://schema.org/SpecialAnnouncement
 * A SpecialAnnouncement combines a simple date-stamped textual information update with contextualized Web links and other structured data. It represents an information
 * update made by a locally-oriented organization, for example schools, pharmacies, healthcare providers, community groups, police, local government. For work in progress
 * guidelines on Coronavirus-related markup see [this doc](https://docs.google.com/document/d/14ikaGCKxo50rRM7nvKSlbUpjyIk2WMQd3IkB1lItlrM/edit#). The motivating scenario for SpecialAnnouncement is the [Coronavirus pandemic](https://en.wikipedia.org/wiki/2019%E2%80%9320_coronavirus_pandemic), and the initial vocabulary is
 * oriented to this urgent situation. Schema.org expect to improve the markup iteratively as it is deployed and as feedback emerges from
 * use. In addition to our usual [Github entry](https://github.com/schemaorg/schemaorg/issues/2490), feedback comments can also be provided in [this document](https://docs.google.com/document/d/1fpdFFxk8s87CWwACs53SGkYv3aafSxz_DTtOQxMrBJQ/edit#). While this schema is
 * designed to communicate urgent crisis-related information, it is not the same as an emergency warning technology like [CAP](https://en.wikipedia.org/wiki/Common_Alerting_Protocol), although there may
 * be overlaps. The intent is to cover the kinds of everyday practical information being posted to existing websites during an emergency
 * situation. Several kinds of information can be provided: We encourage the provision of "name", "text", "datePosted", "expires" (if appropriate), "category" and
 * "url" as a simple baseline. It is important to provide a value for "category" where possible, most ideally as a well
 * known URL from Wikipedia or Wikidata. In the case of the 2019-2020 Coronavirus pandemic, this should be "https://en.wikipedia.org/w/index.php?title=2019-20\_coronavirus\_pandemic" or "https://www.wikidata.org/wiki/Q81068910". For
 * many of the possible properties, values can either be simple links or an inline description, depending on whether a summary is
 * available. For a link, provide just the URL of the appropriate page as the property's value. For an inline description, use
 * a [[WebContent]] type, and provide the url as a property of that, alongside at least a simple "[[text]]" summary of the
 * page. It is unlikely that a single SpecialAnnouncement will need all of the possible properties simultaneously. We expect that in many
 * cases the page referenced might contain more specialized structured data, e.g. contact info, [[openingHours]], [[Event]], [[FAQPage]] etc. By linking to those
 * pages from a [[SpecialAnnouncement]] you can help make it clearer that the events are related to the situation (e.g. Coronavirus) indicated
 * by the [[category]] property of the [[SpecialAnnouncement]]. Many [[SpecialAnnouncement]]s will relate to particular regions and to identifiable local organizations. Use [[spatialCoverage]]
 * for the region, and [[announcementLocation]] to indicate specific [[LocalBusiness]]es and [[CivicStructure]]s. If the announcement affects both a particular region and a
 * specific location (for example, a library closure that serves an entire region), use both [[spatialCoverage]] and [[announcementLocation]]. The [[about]] property can
 * be used to indicate entities that are the focus of the announcement. We now recommend using [[about]] only for representing non-location
 * entities (e.g. a [[Course]] or a [[RadioStation]]). For places, use [[announcementLocation]] and [[spatialCoverage]]. Consumers of this markup should be aware that
 * the initial design encouraged the use of [[about]] for locations too. The basic content of [[SpecialAnnouncement]] is similar to that of
 * an [RSS](https://en.wikipedia.org/wiki/RSS) or [Atom](https://en.wikipedia.org/wiki/Atom_(Web_standard)) feed. For publishers without such feeds, basic feed-like information can be shared by posting [[SpecialAnnouncement]] updates in
 * a page, e.g. using JSON-LD. For sites with Atom/RSS functionality, you can point to a feed with the [[webFeed]] property. This
 * can be a simple URL, or an inline [[DataFeed]] object, with [[encodingFormat]] providing media type information, e.g. "application/rss+xml" or "application/atom+xml". 
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class SpecialAnnouncement extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'SpecialAnnouncement';

   /**
     * Information about public transport closures.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent
    */
   protected $prop_publicTransportClosuresInfo;

   /**
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening
     * hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
    * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\CivicStructure|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness
    */
   protected $prop_announcementLocation;

   /**
     * Information about school closures.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_schoolClosuresInfo;

   /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing
    */
   protected $prop_category;

   /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent
    */
   protected $prop_quarantineGuidelines;

   /**
     * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page
     * containing [[SpecialAnnouncement]] markup on a site.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent
    */
   protected $prop_newsUpdatesAndGuidelines;

   /**
     * Information about disease prevention.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent
    */
   protected $prop_diseasePreventionInfo;

   /**
     * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\GovernmentService
    */
   protected $prop_governmentBenefitsInfo;

   /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS
     * or Atom.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed
    */
   protected $prop_webFeed;

   /**
     * Information about travel bans, e.g. in the context of a pandemic.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_travelBans;

   /**
     * Publication date of an online listing.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_datePosted;

   /**
     * Information about getting tested (for a [[MedicalCondition]]), e.g. in the context of a pandemic.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent
    */
   protected $prop_gettingTestedInfo;

   /**
     * Statistical information about the spread of a disease, either as [[WebContent]], or described directly as a [[Dataset]], or the specific [[Observation]]s
     * in the dataset. When a [[WebContent]] URL is provided, the page indicated might also contain more such markup.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\Observation
    */
   protected $prop_diseaseSpreadStatistics;

   /**
     * Information about public transport closures.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent $value
    * @return static
    */
   function setPublicTransportClosuresInfo($value)
   {
       return $this->setProp('publicTransportClosuresInfo', $value);
   }

   /**
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening
     * hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
    * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\CivicStructure|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness $value
    * @return static
    */
   function setAnnouncementLocation($value)
   {
       return $this->setProp('announcementLocation', $value);
   }

   /**
     * Information about school closures.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setSchoolClosuresInfo($value)
   {
       return $this->setProp('schoolClosuresInfo', $value);
   }

   /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing $value
    * @return static
    */
   function setCategory($value)
   {
       return $this->setProp('category', $value);
   }

   /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent $value
    * @return static
    */
   function setQuarantineGuidelines($value)
   {
       return $this->setProp('quarantineGuidelines', $value);
   }

   /**
     * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page
     * containing [[SpecialAnnouncement]] markup on a site.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent $value
    * @return static
    */
   function setNewsUpdatesAndGuidelines($value)
   {
       return $this->setProp('newsUpdatesAndGuidelines', $value);
   }

   /**
     * Information about disease prevention.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent $value
    * @return static
    */
   function setDiseasePreventionInfo($value)
   {
       return $this->setProp('diseasePreventionInfo', $value);
   }

   /**
     * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\GovernmentService $value
    * @return static
    */
   function setGovernmentBenefitsInfo($value)
   {
       return $this->setProp('governmentBenefitsInfo', $value);
   }

   /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS
     * or Atom.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed $value
    * @return static
    */
   function setWebFeed($value)
   {
       return $this->setProp('webFeed', $value);
   }

   /**
     * Information about travel bans, e.g. in the context of a pandemic.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setTravelBans($value)
   {
       return $this->setProp('travelBans', $value);
   }

   /**
     * Publication date of an online listing.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setDatePosted($value)
   {
       return $this->setProp('datePosted', $value);
   }

   /**
     * Information about getting tested (for a [[MedicalCondition]]), e.g. in the context of a pandemic.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent $value
    * @return static
    */
   function setGettingTestedInfo($value)
   {
       return $this->setProp('gettingTestedInfo', $value);
   }

   /**
     * Statistical information about the spread of a disease, either as [[WebContent]], or described directly as a [[Dataset]], or the specific [[Observation]]s
     * in the dataset. When a [[WebContent]] URL is provided, the page indicated might also contain more such markup.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\Observation $value
    * @return static
    */
   function setDiseaseSpreadStatistics($value)
   {
       return $this->setProp('diseaseSpreadStatistics', $value);
   }

   /**
     * Information about public transport closures.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|null
    */
   function getPublicTransportClosuresInfo()
   {
       return $this->getProp('publicTransportClosuresInfo');
   }

   /**
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening
     * hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
    * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\CivicStructure|\Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness|null
    */
   function getAnnouncementLocation()
   {
       return $this->getProp('announcementLocation');
   }

   /**
     * Information about school closures.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getSchoolClosuresInfo()
   {
       return $this->getProp('schoolClosuresInfo');
   }

   /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing|null
    */
   function getCategory()
   {
       return $this->getProp('category');
   }

   /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|null
    */
   function getQuarantineGuidelines()
   {
       return $this->getProp('quarantineGuidelines');
   }

   /**
     * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page
     * containing [[SpecialAnnouncement]] markup on a site.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|null
    */
   function getNewsUpdatesAndGuidelines()
   {
       return $this->getProp('newsUpdatesAndGuidelines');
   }

   /**
     * Information about disease prevention.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|null
    */
   function getDiseasePreventionInfo()
   {
       return $this->getProp('diseasePreventionInfo');
   }

   /**
     * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\GovernmentService|null
    */
   function getGovernmentBenefitsInfo()
   {
       return $this->getProp('governmentBenefitsInfo');
   }

   /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS
     * or Atom.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed|null
    */
   function getWebFeed()
   {
       return $this->getProp('webFeed');
   }

   /**
     * Information about travel bans, e.g. in the context of a pandemic.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getTravelBans()
   {
       return $this->getProp('travelBans');
   }

   /**
     * Publication date of an online listing.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getDatePosted()
   {
       return $this->getProp('datePosted');
   }

   /**
     * Information about getting tested (for a [[MedicalCondition]]), e.g. in the context of a pandemic.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|null
    */
   function getGettingTestedInfo()
   {
       return $this->getProp('gettingTestedInfo');
   }

   /**
     * Statistical information about the spread of a disease, either as [[WebContent]], or described directly as a [[Dataset]], or the specific [[Observation]]s
     * in the dataset. When a [[WebContent]] URL is provided, the page indicated might also contain more such markup.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent\WebContent|\Vnetby\Schemaorg\Types\Thing\Intangible\Observation|null
    */
   function getDiseaseSpreadStatistics()
   {
       return $this->getProp('diseaseSpreadStatistics');
   }
}
