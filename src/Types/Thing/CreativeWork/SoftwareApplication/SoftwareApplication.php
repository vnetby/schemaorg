<?php

/**
 * @see https://schema.org/SoftwareApplication
 * A software application.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication;

class SoftwareApplication extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'SoftwareApplication';

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_applicationSubCategory;

    /**
     * Storage requirements (free space required).
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_storageRequirements;

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_applicationSuite;

    /**
     * A link to a screenshot image of the app.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_screenshot;

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_featureList;

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_installUrl;

    /**
     * If the file can be downloaded, URL to download the binary.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_downloadUrl;

    /**
     * Supporting data for a SoftwareApplication.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed
     */
    protected $prop_supportingData;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_fileSize;

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_applicationCategory;

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_countriesNotSupported;

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package,
     * but required to run the application (examples: DirectX, Java or .NET runtime).
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_softwareRequirements;

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_availableOnDevice;

    /**
     * Additional content for a software application.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
     */
    protected $prop_softwareAddOn;

    /**
     * Software application help.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    protected $prop_softwareHelp;

    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_operatingSystem;

    /**
     * Minimum memory requirements.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_memoryRequirements;

    /**
     * Description of what changed in this version.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_releaseNotes;

    /**
     * Version of the software instance.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_softwareVersion;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on
     * wifi).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_permissions;

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_countriesSupported;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_processorRequirements;

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setApplicationSubCategory($value)
    {
        return $this->setProp('applicationSubCategory', $value);
    }

    /**
     * Storage requirements (free space required).
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setStorageRequirements($value)
    {
        return $this->setProp('storageRequirements', $value);
    }

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setApplicationSuite($value)
    {
        return $this->setProp('applicationSuite', $value);
    }

    /**
     * A link to a screenshot image of the app.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setScreenshot($value)
    {
        return $this->setProp('screenshot', $value);
    }

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFeatureList($value)
    {
        return $this->setProp('featureList', $value);
    }

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setInstallUrl($value)
    {
        return $this->setProp('installUrl', $value);
    }

    /**
     * If the file can be downloaded, URL to download the binary.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setDownloadUrl($value)
    {
        return $this->setProp('downloadUrl', $value);
    }

    /**
     * Supporting data for a SoftwareApplication.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed $value
     * @return static
     */
    function setSupportingData($value)
    {
        return $this->setProp('supportingData', $value);
    }

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFileSize($value)
    {
        return $this->setProp('fileSize', $value);
    }

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setApplicationCategory($value)
    {
        return $this->setProp('applicationCategory', $value);
    }

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCountriesNotSupported($value)
    {
        return $this->setProp('countriesNotSupported', $value);
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package,
     * but required to run the application (examples: DirectX, Java or .NET runtime).
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSoftwareRequirements($value)
    {
        return $this->setProp('softwareRequirements', $value);
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAvailableOnDevice($value)
    {
        return $this->setProp('availableOnDevice', $value);
    }

    /**
     * Additional content for a software application.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication $value
     * @return static
     */
    function setSoftwareAddOn($value)
    {
        return $this->setProp('softwareAddOn', $value);
    }

    /**
     * Software application help.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setSoftwareHelp($value)
    {
        return $this->setProp('softwareHelp', $value);
    }

    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOperatingSystem($value)
    {
        return $this->setProp('operatingSystem', $value);
    }

    /**
     * Minimum memory requirements.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setMemoryRequirements($value)
    {
        return $this->setProp('memoryRequirements', $value);
    }

    /**
     * Description of what changed in this version.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setReleaseNotes($value)
    {
        return $this->setProp('releaseNotes', $value);
    }

    /**
     * Version of the software instance.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSoftwareVersion($value)
    {
        return $this->setProp('softwareVersion', $value);
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on
     * wifi).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPermissions($value)
    {
        return $this->setProp('permissions', $value);
    }

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCountriesSupported($value)
    {
        return $this->setProp('countriesSupported', $value);
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProcessorRequirements($value)
    {
        return $this->setProp('processorRequirements', $value);
    }

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getApplicationSubCategory()
    {
        return $this->getProp('applicationSubCategory');
    }

    /**
     * Storage requirements (free space required).
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getStorageRequirements()
    {
        return $this->getProp('storageRequirements');
    }

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getApplicationSuite()
    {
        return $this->getProp('applicationSuite');
    }

    /**
     * A link to a screenshot image of the app.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getScreenshot()
    {
        return $this->getProp('screenshot');
    }

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFeatureList()
    {
        return $this->getProp('featureList');
    }

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getInstallUrl()
    {
        return $this->getProp('installUrl');
    }

    /**
     * If the file can be downloaded, URL to download the binary.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getDownloadUrl()
    {
        return $this->getProp('downloadUrl');
    }

    /**
     * Supporting data for a SoftwareApplication.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed|null
     */
    function getSupportingData()
    {
        return $this->getProp('supportingData');
    }

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFileSize()
    {
        return $this->getProp('fileSize');
    }

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getApplicationCategory()
    {
        return $this->getProp('applicationCategory');
    }

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCountriesNotSupported()
    {
        return $this->getProp('countriesNotSupported');
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package,
     * but required to run the application (examples: DirectX, Java or .NET runtime).
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSoftwareRequirements()
    {
        return $this->getProp('softwareRequirements');
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAvailableOnDevice()
    {
        return $this->getProp('availableOnDevice');
    }

    /**
     * Additional content for a software application.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication|null
     */
    function getSoftwareAddOn()
    {
        return $this->getProp('softwareAddOn');
    }

    /**
     * Software application help.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getSoftwareHelp()
    {
        return $this->getProp('softwareHelp');
    }

    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOperatingSystem()
    {
        return $this->getProp('operatingSystem');
    }

    /**
     * Minimum memory requirements.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getMemoryRequirements()
    {
        return $this->getProp('memoryRequirements');
    }

    /**
     * Description of what changed in this version.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getReleaseNotes()
    {
        return $this->getProp('releaseNotes');
    }

    /**
     * Version of the software instance.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSoftwareVersion()
    {
        return $this->getProp('softwareVersion');
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on
     * wifi).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPermissions()
    {
        return $this->getProp('permissions');
    }

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCountriesSupported()
    {
        return $this->getProp('countriesSupported');
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProcessorRequirements()
    {
        return $this->getProp('processorRequirements');
    }
}
