<?php

/**
* @see https://schema.org/WebContent
 * WebContent is a type representing all [[WebPage]], [[WebSite]] and [[WebPageElement]] content. It is sometimes the case that detailed distinctions between Web
 * pages, sites and their parts are not always important or obvious. The [[WebContent]] type makes it easier to describe Web-addressable content
 * without requiring such distinctions to always be stated. (The intent is that the existing types [[WebPage]], [[WebSite]] and [[WebPageElement]] will eventually
 * be declared as subtypes of [[WebContent]].)
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\WebContent;

class WebContent extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'WebContent';
}
