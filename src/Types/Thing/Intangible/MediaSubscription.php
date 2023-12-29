<?php

/**
 * @see https://schema.org/MediaSubscription
 * A subscription which allows a user to access media including audio, video, books, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class MediaSubscription extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'MediaSubscription';

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy
     * a movie before being able to watch it.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
     */
    public $expectsAcceptanceOf;

    /**
     * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription
     * before playing media.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $authenticator;

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy
     * a movie before being able to watch it.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
     * @return static
     */
    function setExpectsAcceptanceOf($value)
    {
        return $this->setProp('expectsAcceptanceOf', $value);
    }

    /**
     * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription
     * before playing media.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setAuthenticator($value)
    {
        return $this->setProp('authenticator', $value);
    }

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy
     * a movie before being able to watch it.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
     */
    function getExpectsAcceptanceOf()
    {
        return $this->getProp('expectsAcceptanceOf');
    }

    /**
     * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription
     * before playing media.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getAuthenticator()
    {
        return $this->getProp('authenticator');
    }
}
