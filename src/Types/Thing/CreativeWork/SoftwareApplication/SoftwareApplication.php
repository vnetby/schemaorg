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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $applicationSubCategory;

    /**
     * Storage requirements (free space required).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $storageRequirements;

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $applicationSuite;

    /**
     * A link to a screenshot image of the app.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $screenshot;

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $featureList;

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $installUrl;

    /**
     * If the file can be downloaded, URL to download the binary.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $downloadUrl;

    /**
     * Supporting data for a SoftwareApplication.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\DataFeed\DataFeed
     */
    public $supportingData;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $fileSize;

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $applicationCategory;

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $countriesNotSupported;

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package,
     * but required to run the application (examples: DirectX, Java or .NET runtime).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $softwareRequirements;

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $availableOnDevice;

    /**
     * Additional content for a software application.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
     */
    public $softwareAddOn;

    /**
     * Software application help.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $softwareHelp;

    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $operatingSystem;

    /**
     * Minimum memory requirements.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $memoryRequirements;

    /**
     * Description of what changed in this version.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $releaseNotes;

    /**
     * Version of the software instance.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $softwareVersion;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on
     * wifi).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $permissions;

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $countriesSupported;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $processorRequirements;

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setApplicationSubCategory($value)
    {
        return $this->setProp('applicationSubCategory', $value);
    }

    /**
     * Storage requirements (free space required).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setStorageRequirements($value)
    {
        return $this->setProp('storageRequirements', $value);
    }

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setApplicationSuite($value)
    {
        return $this->setProp('applicationSuite', $value);
    }

    /**
     * A link to a screenshot image of the app.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setScreenshot($value)
    {
        return $this->setProp('screenshot', $value);
    }

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFeatureList($value)
    {
        return $this->setProp('featureList', $value);
    }

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setInstallUrl($value)
    {
        return $this->setProp('installUrl', $value);
    }

    /**
     * If the file can be downloaded, URL to download the binary.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
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
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFileSize($value)
    {
        return $this->setProp('fileSize', $value);
    }

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setApplicationCategory($value)
    {
        return $this->setProp('applicationCategory', $value);
    }

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCountriesNotSupported($value)
    {
        return $this->setProp('countriesNotSupported', $value);
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package,
     * but required to run the application (examples: DirectX, Java or .NET runtime).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSoftwareRequirements($value)
    {
        return $this->setProp('softwareRequirements', $value);
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
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
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOperatingSystem($value)
    {
        return $this->setProp('operatingSystem', $value);
    }

    /**
     * Minimum memory requirements.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setMemoryRequirements($value)
    {
        return $this->setProp('memoryRequirements', $value);
    }

    /**
     * Description of what changed in this version.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setReleaseNotes($value)
    {
        return $this->setProp('releaseNotes', $value);
    }

    /**
     * Version of the software instance.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSoftwareVersion($value)
    {
        return $this->setProp('softwareVersion', $value);
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on
     * wifi).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPermissions($value)
    {
        return $this->setProp('permissions', $value);
    }

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCountriesSupported($value)
    {
        return $this->setProp('countriesSupported', $value);
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProcessorRequirements($value)
    {
        return $this->setProp('processorRequirements', $value);
    }

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getApplicationSubCategory()
    {
        return $this->getProp('applicationSubCategory');
    }

    /**
     * Storage requirements (free space required).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getStorageRequirements()
    {
        return $this->getProp('storageRequirements');
    }

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getApplicationSuite()
    {
        return $this->getProp('applicationSuite');
    }

    /**
     * A link to a screenshot image of the app.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getScreenshot()
    {
        return $this->getProp('screenshot');
    }

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFeatureList()
    {
        return $this->getProp('featureList');
    }

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getInstallUrl()
    {
        return $this->getProp('installUrl');
    }

    /**
     * If the file can be downloaded, URL to download the binary.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
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
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFileSize()
    {
        return $this->getProp('fileSize');
    }

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getApplicationCategory()
    {
        return $this->getProp('applicationCategory');
    }

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCountriesNotSupported()
    {
        return $this->getProp('countriesNotSupported');
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package,
     * but required to run the application (examples: DirectX, Java or .NET runtime).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSoftwareRequirements()
    {
        return $this->getProp('softwareRequirements');
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
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
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOperatingSystem()
    {
        return $this->getProp('operatingSystem');
    }

    /**
     * Minimum memory requirements.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getMemoryRequirements()
    {
        return $this->getProp('memoryRequirements');
    }

    /**
     * Description of what changed in this version.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getReleaseNotes()
    {
        return $this->getProp('releaseNotes');
    }

    /**
     * Version of the software instance.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSoftwareVersion()
    {
        return $this->getProp('softwareVersion');
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on
     * wifi).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPermissions()
    {
        return $this->getProp('permissions');
    }

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCountriesSupported()
    {
        return $this->getProp('countriesSupported');
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProcessorRequirements()
    {
        return $this->getProp('processorRequirements');
    }
}
