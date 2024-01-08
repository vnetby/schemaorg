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
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Menu
     */
    public $hasMenu;

    /**
     * The cuisine of the restaurant.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $servesCuisine;

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     * @var bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $acceptsReservations;

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Rating\Rating
     */
    public $starRating;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Menu $value
     * @return static
     */
    function setHasMenu($value)
    {
        return $this->setProp('hasMenu', $value);
    }

    /**
     * The cuisine of the restaurant.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setServesCuisine($value)
    {
        return $this->setProp('servesCuisine', $value);
    }

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     * @param bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setAcceptsReservations($value)
    {
        return $this->setProp('acceptsReservations', $value);
    }

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
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Menu|null
     */
    function getHasMenu()
    {
        return $this->getProp('hasMenu');
    }

    /**
     * The cuisine of the restaurant.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getServesCuisine()
    {
        return $this->getProp('servesCuisine');
    }

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     * @return bool|string|\Vnetby\Schemaorg\DataTypes\DataBoolean|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getAcceptsReservations()
    {
        return $this->getProp('acceptsReservations');
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
}
