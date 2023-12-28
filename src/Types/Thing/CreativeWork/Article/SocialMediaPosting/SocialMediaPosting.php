<?php

/**
* @see https://schema.org/SocialMediaPosting
 * A post to a social media platform, including blog posts, tweets, Facebook posts, etc.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\SocialMediaPosting;

class SocialMediaPosting extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\Article
{
   const TYPE = 'SocialMediaPosting';

   /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
    */
   protected $prop_sharedContent;

   /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
    * @return static
    */
   function setSharedContent($value)
   {
       return $this->setProp('sharedContent', $value);
   }

   /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
    */
   function getSharedContent()
   {
       return $this->getProp('sharedContent');
   }
}
