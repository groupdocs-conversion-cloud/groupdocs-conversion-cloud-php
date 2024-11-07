<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WebLoadOptions.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
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
 * WebLoadOptions
 *
 * @description Html document load options
 */
class WebLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WebLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pageNumbering' => 'bool',
        'encoding' => 'string',
        'usePdf' => 'bool',
        'renderingMode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pageNumbering' => null,
        'encoding' => null,
        'usePdf' => null,
        'renderingMode' => null
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
        'pageNumbering' => 'PageNumbering',
        'encoding' => 'Encoding',
        'usePdf' => 'UsePdf',
        'renderingMode' => 'RenderingMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageNumbering' => 'setPageNumbering',
        'encoding' => 'setEncoding',
        'usePdf' => 'setUsePdf',
        'renderingMode' => 'setRenderingMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageNumbering' => 'getPageNumbering',
        'encoding' => 'getEncoding',
        'usePdf' => 'getUsePdf',
        'renderingMode' => 'getRenderingMode'
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

    const RENDERING_MODE_FLOW = 'Flow';
    const RENDERING_MODE_ABSOLUTE_POSITIONING = 'AbsolutePositioning';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRenderingModeAllowableValues()
    {
        return [
            self::RENDERING_MODE_FLOW,
            self::RENDERING_MODE_ABSOLUTE_POSITIONING,
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

        $this->container['pageNumbering'] = isset($data['pageNumbering']) ? $data['pageNumbering'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['usePdf'] = isset($data['usePdf']) ? $data['usePdf'] : null;
        $this->container['renderingMode'] = isset($data['renderingMode']) ? $data['renderingMode'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['pageNumbering'] === null) {
            $invalidProperties[] = "'pageNumbering' can't be null";
        }
        if ($this->container['usePdf'] === null) {
            $invalidProperties[] = "'usePdf' can't be null";
        }
        if ($this->container['renderingMode'] === null) {
            $invalidProperties[] = "'renderingMode' can't be null";
        }
        $allowedValues = $this->getRenderingModeAllowableValues();
        if (!in_array($this->container['renderingMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'renderingMode', must be one of '%s'",
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

        if ($this->container['pageNumbering'] === null) {
            return false;
        }
        if ($this->container['usePdf'] === null) {
            return false;
        }
        if ($this->container['renderingMode'] === null) {
            return false;
        }
        $allowedValues = $this->getRenderingModeAllowableValues();
        if (!in_array($this->container['renderingMode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets pageNumbering
     *
     * @return bool
     */
    public function getPageNumbering()
    {
        return $this->container['pageNumbering'];
    }

    /*
     * Sets pageNumbering
     *
     * @param bool $pageNumbering Enable or disable generation of page numbering in converted document. Default: false
     *
     * @return $this
     */
    public function setPageNumbering($pageNumbering)
    {
        $this->container['pageNumbering'] = $pageNumbering;

        return $this;
    }

    /*
     * Gets encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /*
     * Sets encoding
     *
     * @param string $encoding Get or sets the encoding to be used when loading the web document. If the property is null the encoding will be determined from document character set attribute
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

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
     * @param bool $usePdf Use pdf for the conversion. Default: false
     *
     * @return $this
     */
    public function setUsePdf($usePdf)
    {
        $this->container['usePdf'] = $usePdf;

        return $this;
    }

    /*
     * Gets renderingMode
     *
     * @return string
     */
    public function getRenderingMode()
    {
        return $this->container['renderingMode'];
    }

    /*
     * Sets renderingMode
     *
     * @param string $renderingMode Controls how HTML content is rendered. Default: AbsolutePositioning
     *
     * @return $this
     */
    public function setRenderingMode($renderingMode)
    {
        $allowedValues = $this->getRenderingModeAllowableValues();
        if ((!is_numeric($renderingMode) && !in_array($renderingMode, $allowedValues)) || (is_numeric($renderingMode) && !in_array($allowedValues[$renderingMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'renderingMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['renderingMode'] = $renderingMode;

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


