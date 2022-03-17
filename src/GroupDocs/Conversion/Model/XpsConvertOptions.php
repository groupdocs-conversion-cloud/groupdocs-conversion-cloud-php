<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="XpsConvertOptions.php">
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
 * XpsConvertOptions
 *
 * @description Xps convert options
 */
class XpsConvertOptions extends ConvertOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "XpsConvertOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'width' => 'int',
        'height' => 'int',
        'dpi' => 'double',
        'password' => 'string',
        'marginTop' => 'int',
        'marginBottom' => 'int',
        'marginLeft' => 'int',
        'marginRight' => 'int',
        'usePdf' => 'bool',
        'watermarkOptions' => '\GroupDocs\Conversion\Model\WatermarkOptions'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'width' => 'int32',
        'height' => 'int32',
        'dpi' => 'double',
        'password' => null,
        'marginTop' => 'int32',
        'marginBottom' => 'int32',
        'marginLeft' => 'int32',
        'marginRight' => 'int32',
        'usePdf' => null,
        'watermarkOptions' => null
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
        'dpi' => 'Dpi',
        'password' => 'Password',
        'marginTop' => 'MarginTop',
        'marginBottom' => 'MarginBottom',
        'marginLeft' => 'MarginLeft',
        'marginRight' => 'MarginRight',
        'usePdf' => 'UsePdf',
        'watermarkOptions' => 'WatermarkOptions'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dpi' => 'setDpi',
        'password' => 'setPassword',
        'marginTop' => 'setMarginTop',
        'marginBottom' => 'setMarginBottom',
        'marginLeft' => 'setMarginLeft',
        'marginRight' => 'setMarginRight',
        'usePdf' => 'setUsePdf',
        'watermarkOptions' => 'setWatermarkOptions'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight',
        'dpi' => 'getDpi',
        'password' => 'getPassword',
        'marginTop' => 'getMarginTop',
        'marginBottom' => 'getMarginBottom',
        'marginLeft' => 'getMarginLeft',
        'marginRight' => 'getMarginRight',
        'usePdf' => 'getUsePdf',
        'watermarkOptions' => 'getWatermarkOptions'
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
        $this->container['dpi'] = isset($data['dpi']) ? $data['dpi'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['marginTop'] = isset($data['marginTop']) ? $data['marginTop'] : null;
        $this->container['marginBottom'] = isset($data['marginBottom']) ? $data['marginBottom'] : null;
        $this->container['marginLeft'] = isset($data['marginLeft']) ? $data['marginLeft'] : null;
        $this->container['marginRight'] = isset($data['marginRight']) ? $data['marginRight'] : null;
        $this->container['usePdf'] = isset($data['usePdf']) ? $data['usePdf'] : null;
        $this->container['watermarkOptions'] = isset($data['watermarkOptions']) ? $data['watermarkOptions'] : null;
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
        if ($this->container['dpi'] === null) {
            $invalidProperties[] = "'dpi' can't be null";
        }
        if ($this->container['marginTop'] === null) {
            $invalidProperties[] = "'marginTop' can't be null";
        }
        if ($this->container['marginBottom'] === null) {
            $invalidProperties[] = "'marginBottom' can't be null";
        }
        if ($this->container['marginLeft'] === null) {
            $invalidProperties[] = "'marginLeft' can't be null";
        }
        if ($this->container['marginRight'] === null) {
            $invalidProperties[] = "'marginRight' can't be null";
        }
        if ($this->container['usePdf'] === null) {
            $invalidProperties[] = "'usePdf' can't be null";
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
        if ($this->container['dpi'] === null) {
            return false;
        }
        if ($this->container['marginTop'] === null) {
            return false;
        }
        if ($this->container['marginBottom'] === null) {
            return false;
        }
        if ($this->container['marginLeft'] === null) {
            return false;
        }
        if ($this->container['marginRight'] === null) {
            return false;
        }
        if ($this->container['usePdf'] === null) {
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
     * @param int $width Desired page width in pixels after conversion
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
     * @param int $height Desired page height in pixels after conversion
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets dpi
     *
     * @return double
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /*
     * Sets dpi
     *
     * @param double $dpi Desired page DPI after conversion. The default resolution is: 96dpi
     *
     * @return $this
     */
    public function setDpi($dpi)
    {
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /*
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /*
     * Sets password
     *
     * @param string $password Set this property if you want to protect the converted document with a password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets marginTop
     *
     * @return int
     */
    public function getMarginTop()
    {
        return $this->container['marginTop'];
    }

    /*
     * Sets marginTop
     *
     * @param int $marginTop Desired page top margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginTop($marginTop)
    {
        $this->container['marginTop'] = $marginTop;

        return $this;
    }

    /*
     * Gets marginBottom
     *
     * @return int
     */
    public function getMarginBottom()
    {
        return $this->container['marginBottom'];
    }

    /*
     * Sets marginBottom
     *
     * @param int $marginBottom Desired page bottom margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginBottom($marginBottom)
    {
        $this->container['marginBottom'] = $marginBottom;

        return $this;
    }

    /*
     * Gets marginLeft
     *
     * @return int
     */
    public function getMarginLeft()
    {
        return $this->container['marginLeft'];
    }

    /*
     * Sets marginLeft
     *
     * @param int $marginLeft Desired page left margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginLeft($marginLeft)
    {
        $this->container['marginLeft'] = $marginLeft;

        return $this;
    }

    /*
     * Gets marginRight
     *
     * @return int
     */
    public function getMarginRight()
    {
        return $this->container['marginRight'];
    }

    /*
     * Sets marginRight
     *
     * @param int $marginRight Desired page right margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginRight($marginRight)
    {
        $this->container['marginRight'] = $marginRight;

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


