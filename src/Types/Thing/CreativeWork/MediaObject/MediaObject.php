<?php

/**
 * @see https://schema.org/MediaObject
 * A media object, such as an image, video, audio, or text object embedded in a web page or a downloadable dataset
 * i.e. DataDownload. Note that a creative work may have many media objects associated with it on the same web page. For
 * example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio
 * stream (2 AudioObject's).
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject;

class MediaObject extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'MediaObject';

    /**
     * Date (including time if available) when this media object was uploaded to this site.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $uploadDate;

    /**
     * The [SHA-2](https://en.wikipedia.org/wiki/SHA-2) SHA256 hash of the content of the item. For example, a zero-length input has value 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $sha256;

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $playerType;

    /**
     * The bitrate of the media object.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $bitrate;

    /**
     * File size in (mega/kilo)bytes.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $contentSize;

    /**
     * The height of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    public $height;

    /**
     * The CreativeWork encoded by this media object.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $encodesCreativeWork;

    /**
     * The width of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $width;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $startTime;

    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that
     * an earlier version had 'yes', 'no').
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\Types\Thing\Intangible\MediaSubscription
     */
    public $requiresSubscription;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $ineligibleRegion;

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the ```src``` element of
     * an ```embed``` tag and should not be the same as the content of the ```loc``` tag.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $embedUrl;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in
     * [ISO 3166 format](http://en.wikipedia.org/wiki/ISO_3166).
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $regionsAllowed;

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $productionCompany;

    /**
     * A NewsArticle associated with the Media Object.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\NewsArticle\NewsArticle
     */
    public $associatedArticle;

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The
     * interpreting party can be indicated using [[claimInterpreter]].
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Claim
     */
    public $interpretedAsClaim;

    /**
     * Actual bytes of the media object, for example the image file or video file.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $contentUrl;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $endTime;

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $encodingFormat;

    /**
     * Date (including time if available) when this media object was uploaded to this site.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setUploadDate($value)
    {
        return $this->setProp('uploadDate', $value);
    }

    /**
     * The [SHA-2](https://en.wikipedia.org/wiki/SHA-2) SHA256 hash of the content of the item. For example, a zero-length input has value 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSha256($value)
    {
        return $this->setProp('sha256', $value);
    }

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPlayerType($value)
    {
        return $this->setProp('playerType', $value);
    }

    /**
     * The bitrate of the media object.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBitrate($value)
    {
        return $this->setProp('bitrate', $value);
    }

    /**
     * File size in (mega/kilo)bytes.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setContentSize($value)
    {
        return $this->setProp('contentSize', $value);
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
     * The CreativeWork encoded by this media object.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setEncodesCreativeWork($value)
    {
        return $this->setProp('encodesCreativeWork', $value);
    }

    /**
     * The width of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWidth($value)
    {
        return $this->setProp('width', $value);
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setStartTime($value)
    {
        return $this->setProp('startTime', $value);
    }

    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that
     * an earlier version had 'yes', 'no').
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\Types\Thing\Intangible\MediaSubscription $value
     * @return static
     */
    function setRequiresSubscription($value)
    {
        return $this->setProp('requiresSubscription', $value);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setDuration($value)
    {
        return $this->setProp('duration', $value);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIneligibleRegion($value)
    {
        return $this->setProp('ineligibleRegion', $value);
    }

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the ```src``` element of
     * an ```embed``` tag and should not be the same as the content of the ```loc``` tag.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setEmbedUrl($value)
    {
        return $this->setProp('embedUrl', $value);
    }

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in
     * [ISO 3166 format](http://en.wikipedia.org/wiki/ISO_3166).
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setRegionsAllowed($value)
    {
        return $this->setProp('regionsAllowed', $value);
    }

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setProductionCompany($value)
    {
        return $this->setProp('productionCompany', $value);
    }

    /**
     * A NewsArticle associated with the Media Object.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\NewsArticle\NewsArticle $value
     * @return static
     */
    function setAssociatedArticle($value)
    {
        return $this->setProp('associatedArticle', $value);
    }

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The
     * interpreting party can be indicated using [[claimInterpreter]].
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Claim $value
     * @return static
     */
    function setInterpretedAsClaim($value)
    {
        return $this->setProp('interpretedAsClaim', $value);
    }

    /**
     * Actual bytes of the media object, for example the image file or video file.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setContentUrl($value)
    {
        return $this->setProp('contentUrl', $value);
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setEndTime($value)
    {
        return $this->setProp('endTime', $value);
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setEncodingFormat($value)
    {
        return $this->setProp('encodingFormat', $value);
    }

    /**
     * Date (including time if available) when this media object was uploaded to this site.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getUploadDate()
    {
        return $this->getProp('uploadDate');
    }

    /**
     * The [SHA-2](https://en.wikipedia.org/wiki/SHA-2) SHA256 hash of the content of the item. For example, a zero-length input has value 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSha256()
    {
        return $this->getProp('sha256');
    }

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPlayerType()
    {
        return $this->getProp('playerType');
    }

    /**
     * The bitrate of the media object.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBitrate()
    {
        return $this->getProp('bitrate');
    }

    /**
     * File size in (mega/kilo)bytes.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getContentSize()
    {
        return $this->getProp('contentSize');
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
     * The CreativeWork encoded by this media object.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getEncodesCreativeWork()
    {
        return $this->getProp('encodesCreativeWork');
    }

    /**
     * The width of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWidth()
    {
        return $this->getProp('width');
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getStartTime()
    {
        return $this->getProp('startTime');
    }

    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that
     * an earlier version had 'yes', 'no').
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\Types\Thing\Intangible\MediaSubscription|null
     */
    function getRequiresSubscription()
    {
        return $this->getProp('requiresSubscription');
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getDuration()
    {
        return $this->getProp('duration');
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIneligibleRegion()
    {
        return $this->getProp('ineligibleRegion');
    }

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the ```src``` element of
     * an ```embed``` tag and should not be the same as the content of the ```loc``` tag.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEmbedUrl()
    {
        return $this->getProp('embedUrl');
    }

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in
     * [ISO 3166 format](http://en.wikipedia.org/wiki/ISO_3166).
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getRegionsAllowed()
    {
        return $this->getProp('regionsAllowed');
    }

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getProductionCompany()
    {
        return $this->getProp('productionCompany');
    }

    /**
     * A NewsArticle associated with the Media Object.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\NewsArticle\NewsArticle|null
     */
    function getAssociatedArticle()
    {
        return $this->getProp('associatedArticle');
    }

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The
     * interpreting party can be indicated using [[claimInterpreter]].
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Claim|null
     */
    function getInterpretedAsClaim()
    {
        return $this->getProp('interpretedAsClaim');
    }

    /**
     * Actual bytes of the media object, for example the image file or video file.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getContentUrl()
    {
        return $this->getProp('contentUrl');
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getEndTime()
    {
        return $this->getProp('endTime');
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg
     * for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]]
     * alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g.
     * defining Web page or a Wikipedia/Wikidata entry.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEncodingFormat()
    {
        return $this->getProp('encodingFormat');
    }
}
