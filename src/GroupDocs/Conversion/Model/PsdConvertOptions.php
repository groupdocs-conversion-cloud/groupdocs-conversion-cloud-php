<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PsdConvertOptions.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * PsdConvertOptions
 *
 * @description Psd convert options
 */
class PsdConvertOptions extends ImageConvertOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PsdConvertOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'channelBitsCount' => 'int',
        'channelsCount' => 'int',
        'colorMode' => 'string',
        'compressionMethod' => 'string',
        'version' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'channelBitsCount' => null,
        'channelsCount' => null,
        'colorMode' => null,
        'compressionMethod' => null,
        'version' => 'int32'
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'channelBitsCount' => 'ChannelBitsCount',
        'channelsCount' => 'ChannelsCount',
        'colorMode' => 'ColorMode',
        'compressionMethod' => 'CompressionMethod',
        'version' => 'Version'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelBitsCount' => 'setChannelBitsCount',
        'channelsCount' => 'setChannelsCount',
        'colorMode' => 'setColorMode',
        'compressionMethod' => 'setCompressionMethod',
        'version' => 'setVersion'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelBitsCount' => 'getChannelBitsCount',
        'channelsCount' => 'getChannelsCount',
        'colorMode' => 'getColorMode',
        'compressionMethod' => 'getCompressionMethod',
        'version' => 'getVersion'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const COLOR_MODE_BITMAP = 'Bitmap';
    const COLOR_MODE_GRAYSCALE = 'Grayscale';
    const COLOR_MODE_INDEXED = 'Indexed';
    const COLOR_MODE_RGB = 'Rgb';
    const COLOR_MODE_CMYK = 'Cmyk';
    const COLOR_MODE_MULTICHANNEL = 'Multichannel';
    const COLOR_MODE_DUOTONE = 'Duotone';
    const COLOR_MODE_LAB = 'Lab';
    const COMPRESSION_METHOD_RAW = 'Raw';
    const COMPRESSION_METHOD_RLE = 'Rle';
    const COMPRESSION_METHOD_ZIP_WITHOUT_PREDICTION = 'ZipWithoutPrediction';
    const COMPRESSION_METHOD_ZIP_WITH_PREDICTION = 'ZipWithPrediction';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorModeAllowableValues()
    {
        return [
            self::COLOR_MODE_BITMAP,
            self::COLOR_MODE_GRAYSCALE,
            self::COLOR_MODE_INDEXED,
            self::COLOR_MODE_RGB,
            self::COLOR_MODE_CMYK,
            self::COLOR_MODE_MULTICHANNEL,
            self::COLOR_MODE_DUOTONE,
            self::COLOR_MODE_LAB,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionMethodAllowableValues()
    {
        return [
            self::COMPRESSION_METHOD_RAW,
            self::COMPRESSION_METHOD_RLE,
            self::COMPRESSION_METHOD_ZIP_WITHOUT_PREDICTION,
            self::COMPRESSION_METHOD_ZIP_WITH_PREDICTION,
        ];
    }
    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['channelBitsCount'] = isset($data['channelBitsCount']) ? $data['channelBitsCount'] : null;
        $this->container['channelsCount'] = isset($data['channelsCount']) ? $data['channelsCount'] : null;
        $this->container['colorMode'] = isset($data['colorMode']) ? $data['colorMode'] : null;
        $this->container['compressionMethod'] = isset($data['compressionMethod']) ? $data['compressionMethod'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['channelBitsCount'] === null) {
            $invalidProperties[] = "'channelBitsCount' can't be null";
        }
        if ($this->container['channelsCount'] === null) {
            $invalidProperties[] = "'channelsCount' can't be null";
        }
        if ($this->container['colorMode'] === null) {
            $invalidProperties[] = "'colorMode' can't be null";
        }
        $allowedValues = $this->getColorModeAllowableValues();
        if (!in_array($this->container['colorMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'colorMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['compressionMethod'] === null) {
            $invalidProperties[] = "'compressionMethod' can't be null";
        }
        $allowedValues = $this->getCompressionMethodAllowableValues();
        if (!in_array($this->container['compressionMethod'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compressionMethod', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['channelBitsCount'] === null) {
            return false;
        }
        if ($this->container['channelsCount'] === null) {
            return false;
        }
        if ($this->container['colorMode'] === null) {
            return false;
        }
        $allowedValues = $this->getColorModeAllowableValues();
        if (!in_array($this->container['colorMode'], $allowedValues)) {
            return false;
        }
        if ($this->container['compressionMethod'] === null) {
            return false;
        }
        $allowedValues = $this->getCompressionMethodAllowableValues();
        if (!in_array($this->container['compressionMethod'], $allowedValues)) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets channelBitsCount
     *
     * @return int
     */
    public function getChannelBitsCount()
    {
        return $this->container['channelBitsCount'];
    }

    /*
     * Sets channelBitsCount
     *
     * @param int $channelBitsCount Bits count per color channel
     *
     * @return $this
     */
    public function setChannelBitsCount($channelBitsCount)
    {
        $this->container['channelBitsCount'] = $channelBitsCount;

        return $this;
    }

    /*
     * Gets channelsCount
     *
     * @return int
     */
    public function getChannelsCount()
    {
        return $this->container['channelsCount'];
    }

    /*
     * Sets channelsCount
     *
     * @param int $channelsCount Color channels count
     *
     * @return $this
     */
    public function setChannelsCount($channelsCount)
    {
        $this->container['channelsCount'] = $channelsCount;

        return $this;
    }

    /*
     * Gets colorMode
     *
     * @return string
     */
    public function getColorMode()
    {
        return $this->container['colorMode'];
    }

    /*
     * Sets colorMode
     *
     * @param string $colorMode Psd color mode
     *
     * @return $this
     */
    public function setColorMode($colorMode)
    {
        $allowedValues = $this->getColorModeAllowableValues();
        if ((!is_numeric($colorMode) && !in_array($colorMode, $allowedValues)) || (is_numeric($colorMode) && !in_array($allowedValues[$colorMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'colorMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['colorMode'] = $colorMode;

        return $this;
    }

    /*
     * Gets compressionMethod
     *
     * @return string
     */
    public function getCompressionMethod()
    {
        return $this->container['compressionMethod'];
    }

    /*
     * Sets compressionMethod
     *
     * @param string $compressionMethod Psd compression method
     *
     * @return $this
     */
    public function setCompressionMethod($compressionMethod)
    {
        $allowedValues = $this->getCompressionMethodAllowableValues();
        if ((!is_numeric($compressionMethod) && !in_array($compressionMethod, $allowedValues)) || (is_numeric($compressionMethod) && !in_array($allowedValues[$compressionMethod], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compressionMethod', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['compressionMethod'] = $compressionMethod;

        return $this;
    }

    /*
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /*
     * Sets version
     *
     * @param int $version Psd file version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


