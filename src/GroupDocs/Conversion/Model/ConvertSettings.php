<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ConvertSettings.php">
 *   Copyright (c) 2003-2020 Aspose Pty Ltd
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

namespace GroupDocs\Conversion\Model;

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * ConvertSettings
 *
 * @description Defines conversion request
 */
class ConvertSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ConvertSettings";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'storageName' => 'string',
        'filePath' => 'string',
        'format' => 'string',
        'loadOptions' => '\GroupDocs\Conversion\Model\LoadOptions',
        'convertOptions' => '\GroupDocs\Conversion\Model\ConvertOptions',
        'outputPath' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'storageName' => null,
        'filePath' => null,
        'format' => null,
        'loadOptions' => null,
        'convertOptions' => null,
        'outputPath' => null
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
        'storageName' => 'StorageName',
        'filePath' => 'FilePath',
        'format' => 'Format',
        'loadOptions' => 'LoadOptions',
        'convertOptions' => 'ConvertOptions',
        'outputPath' => 'OutputPath'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'storageName' => 'setStorageName',
        'filePath' => 'setFilePath',
        'format' => 'setFormat',
        'loadOptions' => 'setLoadOptions',
        'convertOptions' => 'setConvertOptions',
        'outputPath' => 'setOutputPath'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'storageName' => 'getStorageName',
        'filePath' => 'getFilePath',
        'format' => 'getFormat',
        'loadOptions' => 'getLoadOptions',
        'convertOptions' => 'getConvertOptions',
        'outputPath' => 'getOutputPath'
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
        $this->container['storageName'] = isset($data['storageName']) ? $data['storageName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['loadOptions'] = isset($data['loadOptions']) ? $data['loadOptions'] : null;
        $this->container['convertOptions'] = isset($data['convertOptions']) ? $data['convertOptions'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
        if ((strlen($this->container['filePath']) < 1)) {
            $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ((strlen($this->container['format']) < 1)) {
            $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 1.";
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

        if ($this->container['filePath'] === null) {
            return false;
        }
        if (strlen($this->container['filePath']) < 1) {
            return false;
        }
        if ($this->container['format'] === null) {
            return false;
        }
        if (strlen($this->container['format']) < 1) {
            return false;
        }
        return true;
    }


    /*
     * Gets storageName
     *
     * @return string
     */
    public function getStorageName()
    {
        return $this->container['storageName'];
    }

    /*
     * Sets storageName
     *
     * @param string $storageName StorageName which contains the file
     *
     * @return $this
     */
    public function setStorageName($storageName)
    {
        $this->container['storageName'] = $storageName;

        return $this;
    }

    /*
     * Gets filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /*
     * Sets filePath
     *
     * @param string $filePath Gets or sets absolute path to a file in the storage
     *
     * @return $this
     */
    public function setFilePath($filePath)
    {

        if ((strlen($filePath) < 1)) {
            throw new \InvalidArgumentException('invalid length for $filePath when calling ConvertSettings., must be bigger than or equal to 1.');
        }

        $this->container['filePath'] = $filePath;

        return $this;
    }

    /*
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /*
     * Sets format
     *
     * @param string $format Gets or sets requested conversion format
     *
     * @return $this
     */
    public function setFormat($format)
    {

        if ((strlen($format) < 1)) {
            throw new \InvalidArgumentException('invalid length for $format when calling ConvertSettings., must be bigger than or equal to 1.');
        }

        $this->container['format'] = $format;

        return $this;
    }

    /*
     * Gets loadOptions
     *
     * @return \GroupDocs\Conversion\Model\LoadOptions
     */
    public function getLoadOptions()
    {
        return $this->container['loadOptions'];
    }

    /*
     * Sets loadOptions
     *
     * @param \GroupDocs\Conversion\Model\LoadOptions $loadOptions Gets or sets format specific load options for source file
     *
     * @return $this
     */
    public function setLoadOptions($loadOptions)
    {
        $this->container['loadOptions'] = $loadOptions;

        return $this;
    }

    /*
     * Gets convertOptions
     *
     * @return \GroupDocs\Conversion\Model\ConvertOptions
     */
    public function getConvertOptions()
    {
        return $this->container['convertOptions'];
    }

    /*
     * Sets convertOptions
     *
     * @param \GroupDocs\Conversion\Model\ConvertOptions $convertOptions Gets or sets format specific convert options for output file
     *
     * @return $this
     */
    public function setConvertOptions($convertOptions)
    {
        $this->container['convertOptions'] = $convertOptions;

        return $this;
    }

    /*
     * Gets outputPath
     *
     * @return string
     */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /*
     * Sets outputPath
     *
     * @param string $outputPath Gets or sets converted file save path
     *
     * @return $this
     */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;

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


