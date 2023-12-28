<?php

/**
* @see https://schema.org/ImagingTest
 * Any medical imaging modality typically used for diagnostic purposes.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest;

class ImagingTest extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
{
   const TYPE = 'ImagingTest';

   /**
     * Imaging technique used.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalImagingTechnique\MedicalImagingTechnique
    */
   protected $prop_imagingTechnique;

   /**
     * Imaging technique used.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalImagingTechnique\MedicalImagingTechnique $value
    * @return static
    */
   function setImagingTechnique($value)
   {
       return $this->setProp('imagingTechnique', $value);
   }

   /**
     * Imaging technique used.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalImagingTechnique\MedicalImagingTechnique|null
    */
   function getImagingTechnique()
   {
       return $this->getProp('imagingTechnique');
   }
}
