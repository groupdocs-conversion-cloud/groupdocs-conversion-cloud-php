<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="CadLoadOptions.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * CadLoadOptions
 *
 * @description Options for loading CAD documents
 */
class CadLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CadLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'layoutNames' => 'string[]',
        'drawType' => 'string',
        'drawColor' => 'string',
        'backgroundColor' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'layoutNames' => null,
        'drawType' => null,
        'drawColor' => null,
        'backgroundColor' => null
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
        'layoutNames' => 'LayoutNames',
        'drawType' => 'DrawType',
        'drawColor' => 'DrawColor',
        'backgroundColor' => 'BackgroundColor'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layoutNames' => 'setLayoutNames',
        'drawType' => 'setDrawType',
        'drawColor' => 'setDrawColor',
        'backgroundColor' => 'setBackgroundColor'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layoutNames' => 'getLayoutNames',
        'drawType' => 'getDrawType',
        'drawColor' => 'getDrawColor',
        'backgroundColor' => 'getBackgroundColor'
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

    const DRAW_TYPE_USE_DRAW_COLOR = 'UseDrawColor';
    const DRAW_TYPE_USE_OBJECT_COLOR = 'UseObjectColor';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDrawTypeAllowableValues()
    {
        return [
            self::DRAW_TYPE_USE_DRAW_COLOR,
            self::DRAW_TYPE_USE_OBJECT_COLOR,
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

        $this->container['layoutNames'] = isset($data['layoutNames']) ? $data['layoutNames'] : null;
        $this->container['drawType'] = isset($data['drawType']) ? $data['drawType'] : null;
        $this->container['drawColor'] = isset($data['drawColor']) ? $data['drawColor'] : null;
        $this->container['backgroundColor'] = isset($data['backgroundColor']) ? $data['backgroundColor'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['drawType'] === null) {
            $invalidProperties[] = "'drawType' can't be null";
        }
        $allowedValues = $this->getDrawTypeAllowableValues();
        if (!in_array($this->container['drawType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'drawType', must be one of '%s'",
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

        if ($this->container['drawType'] === null) {
            return false;
        }
        $allowedValues = $this->getDrawTypeAllowableValues();
        if (!in_array($this->container['drawType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets layoutNames
     *
     * @return string[]
     */
    public function getLayoutNames()
    {
        return $this->container['layoutNames'];
    }

    /*
     * Sets layoutNames
     *
     * @param string[] $layoutNames Render specific CAD layouts
     *
     * @return $this
     */
    public function setLayoutNames($layoutNames)
    {
        $this->container['layoutNames'] = $layoutNames;

        return $this;
    }

    /*
     * Gets drawType
     *
     * @return string
     */
    public function getDrawType()
    {
        return $this->container['drawType'];
    }

    /*
     * Sets drawType
     *
     * @param string $drawType A type of drawing.
     *
     * @return $this
     */
    public function setDrawType($drawType)
    {
        $allowedValues = $this->getDrawTypeAllowableValues();
        if ((!is_numeric($drawType) && !in_array($drawType, $allowedValues)) || (is_numeric($drawType) && !in_array($allowedValues[$drawType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'drawType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['drawType'] = $drawType;

        return $this;
    }

    /*
     * Gets drawColor
     *
     * @return string
     */
    public function getDrawColor()
    {
        return $this->container['drawColor'];
    }

    /*
     * Sets drawColor
     *
     * @param string $drawColor A foreground color.
     *
     * @return $this
     */
    public function setDrawColor($drawColor)
    {
        $this->container['drawColor'] = $drawColor;

        return $this;
    }

    /*
     * Gets backgroundColor
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['backgroundColor'];
    }

    /*
     * Sets backgroundColor
     *
     * @param string $backgroundColor A background color.
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->container['backgroundColor'] = $backgroundColor;

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


