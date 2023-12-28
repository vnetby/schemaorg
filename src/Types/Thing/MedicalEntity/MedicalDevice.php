<?php

/**
 * @see https://schema.org/MedicalDevice
 * Any object used in a medical capacity, such as to diagnose or treat a patient.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class MedicalDevice extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalDevice';

    /**
     * A description of the postoperative procedures, care, and/or followups for this device.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_postOp;

    /**
     * A description of the workup, testing, and other preparations required before implanting this device.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_preOp;

    /**
     * A description of the procedure involved in setting up, using, and/or installing the device.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_procedure;

    /**
     * A contraindication for this therapy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalContraindication|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_contraindication;

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in
     * death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    protected $prop_adverseOutcome;

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient
     * and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    protected $prop_seriousAdverseOutcome;

    /**
     * A description of the postoperative procedures, care, and/or followups for this device.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPostOp($value)
    {
        return $this->setProp('postOp', $value);
    }

    /**
     * A description of the workup, testing, and other preparations required before implanting this device.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPreOp($value)
    {
        return $this->setProp('preOp', $value);
    }

    /**
     * A description of the procedure involved in setting up, using, and/or installing the device.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProcedure($value)
    {
        return $this->setProp('procedure', $value);
    }

    /**
     * A contraindication for this therapy.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalContraindication|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setContraindication($value)
    {
        return $this->setProp('contraindication', $value);
    }

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in
     * death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setAdverseOutcome($value)
    {
        return $this->setProp('adverseOutcome', $value);
    }

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient
     * and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setSeriousAdverseOutcome($value)
    {
        return $this->setProp('seriousAdverseOutcome', $value);
    }

    /**
     * A description of the postoperative procedures, care, and/or followups for this device.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPostOp()
    {
        return $this->getProp('postOp');
    }

    /**
     * A description of the workup, testing, and other preparations required before implanting this device.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPreOp()
    {
        return $this->getProp('preOp');
    }

    /**
     * A description of the procedure involved in setting up, using, and/or installing the device.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProcedure()
    {
        return $this->getProp('procedure');
    }

    /**
     * A contraindication for this therapy.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalContraindication|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getContraindication()
    {
        return $this->getProp('contraindication');
    }

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in
     * death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getAdverseOutcome()
    {
        return $this->getProp('adverseOutcome');
    }

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient
     * and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getSeriousAdverseOutcome()
    {
        return $this->getProp('seriousAdverseOutcome');
    }
}
