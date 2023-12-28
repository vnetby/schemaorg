<?php

/**
* @see https://schema.org/AudioObjectSnapshot
 * A specific and exact (byte-for-byte) version of an [[AudioObject]]. Two byte-for-byte identical files, for the purposes of this type, considered identical.
 * If they have different embedded metadata the files will differ. Different external facts about the files, e.g. creator or dateCreated that
 * aren't represented in their actual content, do not affect this notion of identity.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject;

class AudioObjectSnapshot extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject
{
   const TYPE = 'AudioObjectSnapshot';
}
