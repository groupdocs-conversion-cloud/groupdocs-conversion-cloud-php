<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WordsSaveOptionsDto.php">
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
 * WordsSaveOptionsDto
 */

namespace GroupDocs\Conversion\Model;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * WordsSaveOptionsDto
 *
 * @description Words save options
 */
class WordsSaveOptionsDto extends SaveOptionsBaseDto 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WordsSaveOptionsDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'convertFileType' => 'string',
        'width' => 'int',
        'height' => 'int',
        'dpi' => 'double',
        'password' => 'string',
        'rtfOptions' => '\GroupDocs\Conversion\Model\RtfOptionsDto',
        'zoom' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'convertFileType' => null,
        'width' => 'int32',
        'height' => 'int32',
        'dpi' => 'double',
        'password' => null,
        'rtfOptions' => null,
        'zoom' => 'int32'
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
        'convertFileType' => 'convertFileType',
        'width' => 'width',
        'height' => 'height',
        'dpi' => 'dpi',
        'password' => 'password',
        'rtfOptions' => 'rtfOptions',
        'zoom' => 'zoom'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'convertFileType' => 'setConvertFileType',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dpi' => 'setDpi',
        'password' => 'setPassword',
        'rtfOptions' => 'setRtfOptions',
        'zoom' => 'setZoom'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'convertFileType' => 'getConvertFileType',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'dpi' => 'getDpi',
        'password' => 'getPassword',
        'rtfOptions' => 'getRtfOptions',
        'zoom' => 'getZoom'
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

    const CONVERT_FILE_TYPE_DOC = 'Doc';
    const CONVERT_FILE_TYPE_DOCM = 'Docm';
    const CONVERT_FILE_TYPE_DOCX = 'Docx';
    const CONVERT_FILE_TYPE_DOT = 'Dot';
    const CONVERT_FILE_TYPE_DOTM = 'Dotm';
    const CONVERT_FILE_TYPE_DOTX = 'Dotx';
    const CONVERT_FILE_TYPE_RTF = 'Rtf';
    const CONVERT_FILE_TYPE_TXT = 'Txt';
    const CONVERT_FILE_TYPE_ODT = 'Odt';
    const CONVERT_FILE_TYPE_OTT = 'Ott';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConvertFileTypeAllowableValues()
    {
        return [
            self::CONVERT_FILE_TYPE_DOC,
            self::CONVERT_FILE_TYPE_DOCM,
            self::CONVERT_FILE_TYPE_DOCX,
            self::CONVERT_FILE_TYPE_DOT,
            self::CONVERT_FILE_TYPE_DOTM,
            self::CONVERT_FILE_TYPE_DOTX,
            self::CONVERT_FILE_TYPE_RTF,
            self::CONVERT_FILE_TYPE_TXT,
            self::CONVERT_FILE_TYPE_ODT,
            self::CONVERT_FILE_TYPE_OTT,
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

        $this->container['convertFileType'] = isset($data['convertFileType']) ? $data['convertFileType'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['dpi'] = isset($data['dpi']) ? $data['dpi'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['rtfOptions'] = isset($data['rtfOptions']) ? $data['rtfOptions'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getConvertFileTypeAllowableValues();
        if (!in_array($this->container['convertFileType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'convertFileType', must be one of '%s'",
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

        $allowedValues = $this->getConvertFileTypeAllowableValues();
        if (!in_array($this->container['convertFileType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets convertFileType
     *
     * @return string
     */
    public function getConvertFileType()
    {
        return $this->container['convertFileType'];
    }

    /*
     * Sets convertFileType
     *
     * @param string $convertFileType The desired file type to which the input document should be converted to
     *
     * @return $this
     */
    public function setConvertFileType($convertFileType)
    {
        $allowedValues = $this->getConvertFileTypeAllowableValues();
        if ((!is_numeric($convertFileType) && !in_array($convertFileType, $allowedValues)) || (is_numeric($convertFileType) && !in_array($allowedValues[$convertFileType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'convertFileType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['convertFileType'] = $convertFileType;

        return $this;
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
     * @param int $width Desired page width after conversion
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
     * @param int $height Desired page height after conversion
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
     * Gets rtfOptions
     *
     * @return \GroupDocs\Conversion\Model\RtfOptionsDto
     */
    public function getRtfOptions()
    {
        return $this->container['rtfOptions'];
    }

    /*
     * Sets rtfOptions
     *
     * @param \GroupDocs\Conversion\Model\RtfOptionsDto $rtfOptions RTF specific convert options
     *
     * @return $this
     */
    public function setRtfOptions($rtfOptions)
    {
        $this->container['rtfOptions'] = $rtfOptions;

        return $this;
    }

    /*
     * Gets zoom
     *
     * @return int
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /*
     * Sets zoom
     *
     * @param int $zoom Specifies the zoom level in percentage. Default is 100. Default zoom is supported till Microsoft Word 2010. Starting from Microsoft Word 2013 default zoom is no longer set to document, instead it appears to use the zoom factor of the last document that was opened.
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

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


