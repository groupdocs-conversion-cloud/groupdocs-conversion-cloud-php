<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfOptimizationOptionsDto.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
/*
 * PdfOptimizationOptionsDto
 */

namespace GroupDocs\Conversion\Model;

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * PdfOptimizationOptionsDto
 *
 * @description Define Pdf optimization options
 */
class PdfOptimizationOptionsDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfOptimizationOptionsDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'linkDuplicateStreams' => 'bool',
        'removeUnusedObjects' => 'bool',
        'removeUnusedStreams' => 'bool',
        'compressImages' => 'bool',
        'imageQuality' => 'int',
        'unembedFonts' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'linkDuplicateStreams' => null,
        'removeUnusedObjects' => null,
        'removeUnusedStreams' => null,
        'compressImages' => null,
        'imageQuality' => 'int32',
        'unembedFonts' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'linkDuplicateStreams' => 'linkDuplicateStreams',
        'removeUnusedObjects' => 'removeUnusedObjects',
        'removeUnusedStreams' => 'removeUnusedStreams',
        'compressImages' => 'compressImages',
        'imageQuality' => 'imageQuality',
        'unembedFonts' => 'unembedFonts'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linkDuplicateStreams' => 'setLinkDuplicateStreams',
        'removeUnusedObjects' => 'setRemoveUnusedObjects',
        'removeUnusedStreams' => 'setRemoveUnusedStreams',
        'compressImages' => 'setCompressImages',
        'imageQuality' => 'setImageQuality',
        'unembedFonts' => 'setUnembedFonts'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linkDuplicateStreams' => 'getLinkDuplicateStreams',
        'removeUnusedObjects' => 'getRemoveUnusedObjects',
        'removeUnusedStreams' => 'getRemoveUnusedStreams',
        'compressImages' => 'getCompressImages',
        'imageQuality' => 'getImageQuality',
        'unembedFonts' => 'getUnembedFonts'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['linkDuplicateStreams'] = isset($data['linkDuplicateStreams']) ? $data['linkDuplicateStreams'] : null;
        $this->container['removeUnusedObjects'] = isset($data['removeUnusedObjects']) ? $data['removeUnusedObjects'] : null;
        $this->container['removeUnusedStreams'] = isset($data['removeUnusedStreams']) ? $data['removeUnusedStreams'] : null;
        $this->container['compressImages'] = isset($data['compressImages']) ? $data['compressImages'] : null;
        $this->container['imageQuality'] = isset($data['imageQuality']) ? $data['imageQuality'] : null;
        $this->container['unembedFonts'] = isset($data['unembedFonts']) ? $data['unembedFonts'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['linkDuplicateStreams'] === null) {
            $invalidProperties[] = "'linkDuplicateStreams' can't be null";
        }
        if ($this->container['removeUnusedObjects'] === null) {
            $invalidProperties[] = "'removeUnusedObjects' can't be null";
        }
        if ($this->container['removeUnusedStreams'] === null) {
            $invalidProperties[] = "'removeUnusedStreams' can't be null";
        }
        if ($this->container['compressImages'] === null) {
            $invalidProperties[] = "'compressImages' can't be null";
        }
        if ($this->container['imageQuality'] === null) {
            $invalidProperties[] = "'imageQuality' can't be null";
        }
        if ($this->container['unembedFonts'] === null) {
            $invalidProperties[] = "'unembedFonts' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['linkDuplicateStreams'] === null) {
            return false;
        }
        if ($this->container['removeUnusedObjects'] === null) {
            return false;
        }
        if ($this->container['removeUnusedStreams'] === null) {
            return false;
        }
        if ($this->container['compressImages'] === null) {
            return false;
        }
        if ($this->container['imageQuality'] === null) {
            return false;
        }
        if ($this->container['unembedFonts'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets linkDuplicateStreams
     *
     * @return bool
     */
    public function getLinkDuplicateStreams()
    {
        return $this->container['linkDuplicateStreams'];
    }

    /*
     * Sets linkDuplicateStreams
     *
     * @param bool $linkDuplicateStreams Link duplcate streams
     *
     * @return $this
     */
    public function setLinkDuplicateStreams($linkDuplicateStreams)
    {
        $this->container['linkDuplicateStreams'] = $linkDuplicateStreams;

        return $this;
    }

    /*
     * Gets removeUnusedObjects
     *
     * @return bool
     */
    public function getRemoveUnusedObjects()
    {
        return $this->container['removeUnusedObjects'];
    }

    /*
     * Sets removeUnusedObjects
     *
     * @param bool $removeUnusedObjects Remove unused objects
     *
     * @return $this
     */
    public function setRemoveUnusedObjects($removeUnusedObjects)
    {
        $this->container['removeUnusedObjects'] = $removeUnusedObjects;

        return $this;
    }

    /*
     * Gets removeUnusedStreams
     *
     * @return bool
     */
    public function getRemoveUnusedStreams()
    {
        return $this->container['removeUnusedStreams'];
    }

    /*
     * Sets removeUnusedStreams
     *
     * @param bool $removeUnusedStreams Remove unused streams
     *
     * @return $this
     */
    public function setRemoveUnusedStreams($removeUnusedStreams)
    {
        $this->container['removeUnusedStreams'] = $removeUnusedStreams;

        return $this;
    }

    /*
     * Gets compressImages
     *
     * @return bool
     */
    public function getCompressImages()
    {
        return $this->container['compressImages'];
    }

    /*
     * Sets compressImages
     *
     * @param bool $compressImages If CompressImages set to true, all images in the document are recompressed. The compression is defined by the ImageQuality property.
     *
     * @return $this
     */
    public function setCompressImages($compressImages)
    {
        $this->container['compressImages'] = $compressImages;

        return $this;
    }

    /*
     * Gets imageQuality
     *
     * @return int
     */
    public function getImageQuality()
    {
        return $this->container['imageQuality'];
    }

    /*
     * Sets imageQuality
     *
     * @param int $imageQuality Value in percent where 100% is unchanged quality and image size. To decrease the image size, use ImageQuality less than 100
     *
     * @return $this
     */
    public function setImageQuality($imageQuality)
    {
        $this->container['imageQuality'] = $imageQuality;

        return $this;
    }

    /*
     * Gets unembedFonts
     *
     * @return bool
     */
    public function getUnembedFonts()
    {
        return $this->container['unembedFonts'];
    }

    /*
     * Sets unembedFonts
     *
     * @param bool $unembedFonts Make fonts not embedded if set to true
     *
     * @return $this
     */
    public function setUnembedFonts($unembedFonts)
    {
        $this->container['unembedFonts'] = $unembedFonts;

        return $this;
    }
    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


