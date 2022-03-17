<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ImageConvertOptions.php">
 *   Copyright (c) 2003-2022 Aspose Pty Ltd
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
 * ImageConvertOptions
 *
 * @description Options for to Image conversion
 */
class ImageConvertOptions extends ConvertOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImageConvertOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'width' => 'int',
        'height' => 'int',
        'horizontalResolution' => 'int',
        'verticalResolution' => 'int',
        'grayscale' => 'bool',
        'rotateAngle' => 'int',
        'usePdf' => 'bool',
        'watermarkOptions' => '\GroupDocs\Conversion\Model\WatermarkOptions',
        'brightness' => 'int',
        'contrast' => 'int',
        'gamma' => 'double',
        'flipMode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'width' => 'int32',
        'height' => 'int32',
        'horizontalResolution' => 'int32',
        'verticalResolution' => 'int32',
        'grayscale' => null,
        'rotateAngle' => 'int32',
        'usePdf' => null,
        'watermarkOptions' => null,
        'brightness' => 'int32',
        'contrast' => 'int32',
        'gamma' => 'double',
        'flipMode' => null
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
        'width' => 'Width',
        'height' => 'Height',
        'horizontalResolution' => 'HorizontalResolution',
        'verticalResolution' => 'VerticalResolution',
        'grayscale' => 'Grayscale',
        'rotateAngle' => 'RotateAngle',
        'usePdf' => 'UsePdf',
        'watermarkOptions' => 'WatermarkOptions',
        'brightness' => 'Brightness',
        'contrast' => 'Contrast',
        'gamma' => 'Gamma',
        'flipMode' => 'FlipMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight',
        'horizontalResolution' => 'setHorizontalResolution',
        'verticalResolution' => 'setVerticalResolution',
        'grayscale' => 'setGrayscale',
        'rotateAngle' => 'setRotateAngle',
        'usePdf' => 'setUsePdf',
        'watermarkOptions' => 'setWatermarkOptions',
        'brightness' => 'setBrightness',
        'contrast' => 'setContrast',
        'gamma' => 'setGamma',
        'flipMode' => 'setFlipMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight',
        'horizontalResolution' => 'getHorizontalResolution',
        'verticalResolution' => 'getVerticalResolution',
        'grayscale' => 'getGrayscale',
        'rotateAngle' => 'getRotateAngle',
        'usePdf' => 'getUsePdf',
        'watermarkOptions' => 'getWatermarkOptions',
        'brightness' => 'getBrightness',
        'contrast' => 'getContrast',
        'gamma' => 'getGamma',
        'flipMode' => 'getFlipMode'
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

    const FLIP_MODE_NONE = 'None';
    const FLIP_MODE_FLIP_X = 'FlipX';
    const FLIP_MODE_FLIP_Y = 'FlipY';
    const FLIP_MODE_FLIP_XY = 'FlipXY';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlipModeAllowableValues()
    {
        return [
            self::FLIP_MODE_NONE,
            self::FLIP_MODE_FLIP_X,
            self::FLIP_MODE_FLIP_Y,
            self::FLIP_MODE_FLIP_XY,
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

        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['horizontalResolution'] = isset($data['horizontalResolution']) ? $data['horizontalResolution'] : null;
        $this->container['verticalResolution'] = isset($data['verticalResolution']) ? $data['verticalResolution'] : null;
        $this->container['grayscale'] = isset($data['grayscale']) ? $data['grayscale'] : null;
        $this->container['rotateAngle'] = isset($data['rotateAngle']) ? $data['rotateAngle'] : null;
        $this->container['usePdf'] = isset($data['usePdf']) ? $data['usePdf'] : null;
        $this->container['watermarkOptions'] = isset($data['watermarkOptions']) ? $data['watermarkOptions'] : null;
        $this->container['brightness'] = isset($data['brightness']) ? $data['brightness'] : null;
        $this->container['contrast'] = isset($data['contrast']) ? $data['contrast'] : null;
        $this->container['gamma'] = isset($data['gamma']) ? $data['gamma'] : null;
        $this->container['flipMode'] = isset($data['flipMode']) ? $data['flipMode'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['horizontalResolution'] === null) {
            $invalidProperties[] = "'horizontalResolution' can't be null";
        }
        if ($this->container['verticalResolution'] === null) {
            $invalidProperties[] = "'verticalResolution' can't be null";
        }
        if ($this->container['grayscale'] === null) {
            $invalidProperties[] = "'grayscale' can't be null";
        }
        if ($this->container['rotateAngle'] === null) {
            $invalidProperties[] = "'rotateAngle' can't be null";
        }
        if ($this->container['usePdf'] === null) {
            $invalidProperties[] = "'usePdf' can't be null";
        }
        if ($this->container['brightness'] === null) {
            $invalidProperties[] = "'brightness' can't be null";
        }
        if ($this->container['contrast'] === null) {
            $invalidProperties[] = "'contrast' can't be null";
        }
        if ($this->container['gamma'] === null) {
            $invalidProperties[] = "'gamma' can't be null";
        }
        if ($this->container['flipMode'] === null) {
            $invalidProperties[] = "'flipMode' can't be null";
        }
        $allowedValues = $this->getFlipModeAllowableValues();
        if (!in_array($this->container['flipMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flipMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['horizontalResolution'] === null) {
            return false;
        }
        if ($this->container['verticalResolution'] === null) {
            return false;
        }
        if ($this->container['grayscale'] === null) {
            return false;
        }
        if ($this->container['rotateAngle'] === null) {
            return false;
        }
        if ($this->container['usePdf'] === null) {
            return false;
        }
        if ($this->container['brightness'] === null) {
            return false;
        }
        if ($this->container['contrast'] === null) {
            return false;
        }
        if ($this->container['gamma'] === null) {
            return false;
        }
        if ($this->container['flipMode'] === null) {
            return false;
        }
        $allowedValues = $this->getFlipModeAllowableValues();
        if (!in_array($this->container['flipMode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param int $width Desired image width after conversion
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /*
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /*
     * Sets height
     *
     * @param int $height Desired image height after conversion
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets horizontalResolution
     *
     * @return int
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontalResolution'];
    }

    /*
     * Sets horizontalResolution
     *
     * @param int $horizontalResolution Desired image horizontal resolution after conversion. The default resolution is the resolution of the input file or 96dpi
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontalResolution)
    {
        $this->container['horizontalResolution'] = $horizontalResolution;

        return $this;
    }

    /*
     * Gets verticalResolution
     *
     * @return int
     */
    public function getVerticalResolution()
    {
        return $this->container['verticalResolution'];
    }

    /*
     * Sets verticalResolution
     *
     * @param int $verticalResolution Desired image vertical resolution after conversion. The default resolution is the resolution of the input file or 96dpi
     *
     * @return $this
     */
    public function setVerticalResolution($verticalResolution)
    {
        $this->container['verticalResolution'] = $verticalResolution;

        return $this;
    }

    /*
     * Gets grayscale
     *
     * @return bool
     */
    public function getGrayscale()
    {
        return $this->container['grayscale'];
    }

    /*
     * Sets grayscale
     *
     * @param bool $grayscale Convert to grayscale image
     *
     * @return $this
     */
    public function setGrayscale($grayscale)
    {
        $this->container['grayscale'] = $grayscale;

        return $this;
    }

    /*
     * Gets rotateAngle
     *
     * @return int
     */
    public function getRotateAngle()
    {
        return $this->container['rotateAngle'];
    }

    /*
     * Sets rotateAngle
     *
     * @param int $rotateAngle Image rotation angle
     *
     * @return $this
     */
    public function setRotateAngle($rotateAngle)
    {
        $this->container['rotateAngle'] = $rotateAngle;

        return $this;
    }

    /*
     * Gets usePdf
     *
     * @return bool
     */
    public function getUsePdf()
    {
        return $this->container['usePdf'];
    }

    /*
     * Sets usePdf
     *
     * @param bool $usePdf If true, the input firstly is converted to PDF and after that to desired format
     *
     * @return $this
     */
    public function setUsePdf($usePdf)
    {
        $this->container['usePdf'] = $usePdf;

        return $this;
    }

    /*
     * Gets watermarkOptions
     *
     * @return \GroupDocs\Conversion\Model\WatermarkOptions
     */
    public function getWatermarkOptions()
    {
        return $this->container['watermarkOptions'];
    }

    /*
     * Sets watermarkOptions
     *
     * @param \GroupDocs\Conversion\Model\WatermarkOptions $watermarkOptions Watermark specific options
     *
     * @return $this
     */
    public function setWatermarkOptions($watermarkOptions)
    {
        $this->container['watermarkOptions'] = $watermarkOptions;

        return $this;
    }

    /*
     * Gets brightness
     *
     * @return int
     */
    public function getBrightness()
    {
        return $this->container['brightness'];
    }

    /*
     * Sets brightness
     *
     * @param int $brightness Adjust image brightness
     *
     * @return $this
     */
    public function setBrightness($brightness)
    {
        $this->container['brightness'] = $brightness;

        return $this;
    }

    /*
     * Gets contrast
     *
     * @return int
     */
    public function getContrast()
    {
        return $this->container['contrast'];
    }

    /*
     * Sets contrast
     *
     * @param int $contrast Adjust image contrast
     *
     * @return $this
     */
    public function setContrast($contrast)
    {
        $this->container['contrast'] = $contrast;

        return $this;
    }

    /*
     * Gets gamma
     *
     * @return double
     */
    public function getGamma()
    {
        return $this->container['gamma'];
    }

    /*
     * Sets gamma
     *
     * @param double $gamma Adjust image gamma
     *
     * @return $this
     */
    public function setGamma($gamma)
    {
        $this->container['gamma'] = $gamma;

        return $this;
    }

    /*
     * Gets flipMode
     *
     * @return string
     */
    public function getFlipMode()
    {
        return $this->container['flipMode'];
    }

    /*
     * Sets flipMode
     *
     * @param string $flipMode Image flip mode
     *
     * @return $this
     */
    public function setFlipMode($flipMode)
    {
        $allowedValues = $this->getFlipModeAllowableValues();
        if ((!is_numeric($flipMode) && !in_array($flipMode, $allowedValues)) || (is_numeric($flipMode) && !in_array($allowedValues[$flipMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'flipMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['flipMode'] = $flipMode;

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


