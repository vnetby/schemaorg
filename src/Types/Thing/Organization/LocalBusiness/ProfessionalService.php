<?php

/**
* @see https://schema.org/ProfessionalService
 * Original definition: "provider of professional services."\n\nThe general [[ProfessionalService]] type for local businesses was deprecated due to confusion with [[Service]]. For reference,
 * the types that it included were: [[Dentist]], [[AccountingService]], [[Attorney]], [[Notary]], as well as types for several kinds of [[HomeAndConstructionBusiness]]: [[Electrician]], [[GeneralContractor]],
 * [[HousePainter]], [[Locksmith]], [[Plumber]], [[RoofingContractor]]. [[LegalService]] was introduced as a more inclusive supertype of [[Attorney]].
*/

namespace Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness;

class ProfessionalService extends \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\LocalBusiness
{
   const TYPE = 'ProfessionalService';
}
