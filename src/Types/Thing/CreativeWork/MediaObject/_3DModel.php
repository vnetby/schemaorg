<?php

/**
* @see https://schema.org/_3DModel
 * A 3D model represents some kind of 3D content, which may have [[encoding]]s in one or more [[MediaObject]]s. Many 3D formats
 * are available (e.g. see [Wikipedia](https://en.wikipedia.org/wiki/Category:3D_graphics_file_formats)); specific encoding formats can be represented using the [[encodingFormat]] property applied to the relevant [[MediaObject]]. For
 * the case of a single file published after Zip compression, the convention of appending '+zip' to the [[encodingFormat]] can be used.
 * Geospatial, AR/VR, artistic/animation, gaming, engineering and scientific content can all be represented using [[3DModel]].
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject;

class _3DModel extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
{
   const TYPE = '_3DModel';

   /**
     * Whether the 3DModel allows resizing. For example, room layout applications often do not allow 3DModel elements to be resized to reflect
     * reality.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_isResizable;

   /**
     * Whether the 3DModel allows resizing. For example, room layout applications often do not allow 3DModel elements to be resized to reflect
     * reality.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setIsResizable($value)
   {
       return $this->setProp('isResizable', $value);
   }

   /**
     * Whether the 3DModel allows resizing. For example, room layout applications often do not allow 3DModel elements to be resized to reflect
     * reality.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getIsResizable()
   {
       return $this->getProp('isResizable');
   }
}
