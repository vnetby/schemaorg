<?php

/**
 * @see https://schema.org/FoodEstablishment
 * A food-related business.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\FoodEstablishment;

class FoodEstablishment extends \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness
{
    const TYPE = 'FoodEstablishment';

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating
     */
    protected $prop_starRating;

    /**
     * The cuisine of the restaurant.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_servesCuisine;

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_acceptsReservations;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Menu|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_hasMenu;

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating $value
     * @return static
     */
    function setStarRating($value)
    {
        return $this->setProp('starRating', $value);
    }

    /**
     * The cuisine of the restaurant.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setServesCuisine($value)
    {
        return $this->setProp('servesCuisine', $value);
    }

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setAcceptsReservations($value)
    {
        return $this->setProp('acceptsReservations', $value);
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Menu|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHasMenu($value)
    {
        return $this->setProp('hasMenu', $value);
    }

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating|null
     */
    function getStarRating()
    {
        return $this->getProp('starRating');
    }

    /**
     * The cuisine of the restaurant.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getServesCuisine()
    {
        return $this->getProp('servesCuisine');
    }

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getAcceptsReservations()
    {
        return $this->getProp('acceptsReservations');
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Menu|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHasMenu()
    {
        return $this->getProp('hasMenu');
    }
}
