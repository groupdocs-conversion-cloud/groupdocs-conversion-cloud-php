<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SlidesSaveOptionsDto.php">
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
 * SlidesSaveOptionsDto
 */

namespace GroupDocs\Conversion\Model;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * SlidesSaveOptionsDto
 *
 * @description Slides save options
 */
class SlidesSaveOptionsDto extends SaveOptionsBaseDto 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SlidesSaveOptionsDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'convertFileType' => 'string',
        'password' => 'string',
        'zoom' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'convertFileType' => null,
        'password' => null,
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
        'password' => 'password',
        'zoom' => 'zoom'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'convertFileType' => 'setConvertFileType',
        'password' => 'setPassword',
        'zoom' => 'setZoom'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'convertFileType' => 'getConvertFileType',
        'password' => 'getPassword',
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

    const CONVERT_FILE_TYPE_PPT = 'Ppt';
    const CONVERT_FILE_TYPE_PPS = 'Pps';
    const CONVERT_FILE_TYPE_PPTX = 'Pptx';
    const CONVERT_FILE_TYPE_PPSX = 'Ppsx';
    const CONVERT_FILE_TYPE_ODP = 'Odp';
    const CONVERT_FILE_TYPE_OTP = 'Otp';
    const CONVERT_FILE_TYPE_POTX = 'Potx';
    const CONVERT_FILE_TYPE_POTM = 'Potm';
    const CONVERT_FILE_TYPE_PPTM = 'Pptm';
    const CONVERT_FILE_TYPE_PPSM = 'Ppsm';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConvertFileTypeAllowableValues()
    {
        return [
            self::CONVERT_FILE_TYPE_PPT,
            self::CONVERT_FILE_TYPE_PPS,
            self::CONVERT_FILE_TYPE_PPTX,
            self::CONVERT_FILE_TYPE_PPSX,
            self::CONVERT_FILE_TYPE_ODP,
            self::CONVERT_FILE_TYPE_OTP,
            self::CONVERT_FILE_TYPE_POTX,
            self::CONVERT_FILE_TYPE_POTM,
            self::CONVERT_FILE_TYPE_PPTM,
            self::CONVERT_FILE_TYPE_PPSM,
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
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
     * @param int $zoom Specifies the zoom level in percentage. Default is 100. Default zoom is supported till Microsoft Powerpoint 2010. Starting from Microsoft Powerpoint 2013 default zoom is no longer set to document, instead it appears to use the zoom factor of the last document that was opened.
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


