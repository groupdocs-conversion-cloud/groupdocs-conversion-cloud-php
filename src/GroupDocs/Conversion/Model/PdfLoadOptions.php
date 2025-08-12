<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfLoadOptions.php">
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
 * PdfLoadOptions
 *
 * @description Pdf document load options
 */
class PdfLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'clearBuiltInDocumentProperties' => 'bool',
        'clearCustomDocumentProperties' => 'bool',
        'pageNumbering' => 'bool',
        'flattenAllFields' => 'bool',
        'hidePdfAnnotations' => 'bool',
        'defaultFont' => 'string',
        'password' => 'string',
        'removeJavascript' => 'bool',
        'removeEmbeddedFiles' => 'bool',
        'fontSubstitutes' => 'map[string,string]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'clearBuiltInDocumentProperties' => null,
        'clearCustomDocumentProperties' => null,
        'pageNumbering' => null,
        'flattenAllFields' => null,
        'hidePdfAnnotations' => null,
        'defaultFont' => null,
        'password' => null,
        'removeJavascript' => null,
        'removeEmbeddedFiles' => null,
        'fontSubstitutes' => null
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
        'clearBuiltInDocumentProperties' => 'ClearBuiltInDocumentProperties',
        'clearCustomDocumentProperties' => 'ClearCustomDocumentProperties',
        'pageNumbering' => 'PageNumbering',
        'flattenAllFields' => 'FlattenAllFields',
        'hidePdfAnnotations' => 'HidePdfAnnotations',
        'defaultFont' => 'DefaultFont',
        'password' => 'Password',
        'removeJavascript' => 'RemoveJavascript',
        'removeEmbeddedFiles' => 'RemoveEmbeddedFiles',
        'fontSubstitutes' => 'FontSubstitutes'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clearBuiltInDocumentProperties' => 'setClearBuiltInDocumentProperties',
        'clearCustomDocumentProperties' => 'setClearCustomDocumentProperties',
        'pageNumbering' => 'setPageNumbering',
        'flattenAllFields' => 'setFlattenAllFields',
        'hidePdfAnnotations' => 'setHidePdfAnnotations',
        'defaultFont' => 'setDefaultFont',
        'password' => 'setPassword',
        'removeJavascript' => 'setRemoveJavascript',
        'removeEmbeddedFiles' => 'setRemoveEmbeddedFiles',
        'fontSubstitutes' => 'setFontSubstitutes'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clearBuiltInDocumentProperties' => 'getClearBuiltInDocumentProperties',
        'clearCustomDocumentProperties' => 'getClearCustomDocumentProperties',
        'pageNumbering' => 'getPageNumbering',
        'flattenAllFields' => 'getFlattenAllFields',
        'hidePdfAnnotations' => 'getHidePdfAnnotations',
        'defaultFont' => 'getDefaultFont',
        'password' => 'getPassword',
        'removeJavascript' => 'getRemoveJavascript',
        'removeEmbeddedFiles' => 'getRemoveEmbeddedFiles',
        'fontSubstitutes' => 'getFontSubstitutes'
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

        $this->container['clearBuiltInDocumentProperties'] = isset($data['clearBuiltInDocumentProperties']) ? $data['clearBuiltInDocumentProperties'] : null;
        $this->container['clearCustomDocumentProperties'] = isset($data['clearCustomDocumentProperties']) ? $data['clearCustomDocumentProperties'] : null;
        $this->container['pageNumbering'] = isset($data['pageNumbering']) ? $data['pageNumbering'] : null;
        $this->container['flattenAllFields'] = isset($data['flattenAllFields']) ? $data['flattenAllFields'] : null;
        $this->container['hidePdfAnnotations'] = isset($data['hidePdfAnnotations']) ? $data['hidePdfAnnotations'] : null;
        $this->container['defaultFont'] = isset($data['defaultFont']) ? $data['defaultFont'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['removeJavascript'] = isset($data['removeJavascript']) ? $data['removeJavascript'] : null;
        $this->container['removeEmbeddedFiles'] = isset($data['removeEmbeddedFiles']) ? $data['removeEmbeddedFiles'] : null;
        $this->container['fontSubstitutes'] = isset($data['fontSubstitutes']) ? $data['fontSubstitutes'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            $invalidProperties[] = "'clearBuiltInDocumentProperties' can't be null";
        }
        if ($this->container['clearCustomDocumentProperties'] === null) {
            $invalidProperties[] = "'clearCustomDocumentProperties' can't be null";
        }
        if ($this->container['pageNumbering'] === null) {
            $invalidProperties[] = "'pageNumbering' can't be null";
        }
        if ($this->container['flattenAllFields'] === null) {
            $invalidProperties[] = "'flattenAllFields' can't be null";
        }
        if ($this->container['hidePdfAnnotations'] === null) {
            $invalidProperties[] = "'hidePdfAnnotations' can't be null";
        }
        if ($this->container['removeJavascript'] === null) {
            $invalidProperties[] = "'removeJavascript' can't be null";
        }
        if ($this->container['removeEmbeddedFiles'] === null) {
            $invalidProperties[] = "'removeEmbeddedFiles' can't be null";
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

        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['clearCustomDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['pageNumbering'] === null) {
            return false;
        }
        if ($this->container['flattenAllFields'] === null) {
            return false;
        }
        if ($this->container['hidePdfAnnotations'] === null) {
            return false;
        }
        if ($this->container['removeJavascript'] === null) {
            return false;
        }
        if ($this->container['removeEmbeddedFiles'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets clearBuiltInDocumentProperties
     *
     * @return bool
     */
    public function getClearBuiltInDocumentProperties()
    {
        return $this->container['clearBuiltInDocumentProperties'];
    }

    /*
     * Sets clearBuiltInDocumentProperties
     *
     * @param bool $clearBuiltInDocumentProperties Clear built-in document properties
     *
     * @return $this
     */
    public function setClearBuiltInDocumentProperties($clearBuiltInDocumentProperties)
    {
        $this->container['clearBuiltInDocumentProperties'] = $clearBuiltInDocumentProperties;

        return $this;
    }

    /*
     * Gets clearCustomDocumentProperties
     *
     * @return bool
     */
    public function getClearCustomDocumentProperties()
    {
        return $this->container['clearCustomDocumentProperties'];
    }

    /*
     * Sets clearCustomDocumentProperties
     *
     * @param bool $clearCustomDocumentProperties Clear custom document properties
     *
     * @return $this
     */
    public function setClearCustomDocumentProperties($clearCustomDocumentProperties)
    {
        $this->container['clearCustomDocumentProperties'] = $clearCustomDocumentProperties;

        return $this;
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
     * @param bool $pageNumbering Enable or disable generation of page numbering in converted document. Default:     false
     *
     * @return $this
     */
    public function setPageNumbering($pageNumbering)
    {
        $this->container['pageNumbering'] = $pageNumbering;

        return $this;
    }

    /*
     * Gets flattenAllFields
     *
     * @return bool
     */
    public function getFlattenAllFields()
    {
        return $this->container['flattenAllFields'];
    }

    /*
     * Sets flattenAllFields
     *
     * @param bool $flattenAllFields Flatten all the fields of the PDF form
     *
     * @return $this
     */
    public function setFlattenAllFields($flattenAllFields)
    {
        $this->container['flattenAllFields'] = $flattenAllFields;

        return $this;
    }

    /*
     * Gets hidePdfAnnotations
     *
     * @return bool
     */
    public function getHidePdfAnnotations()
    {
        return $this->container['hidePdfAnnotations'];
    }

    /*
     * Sets hidePdfAnnotations
     *
     * @param bool $hidePdfAnnotations Hide annotations in Pdf documents
     *
     * @return $this
     */
    public function setHidePdfAnnotations($hidePdfAnnotations)
    {
        $this->container['hidePdfAnnotations'] = $hidePdfAnnotations;

        return $this;
    }

    /*
     * Gets defaultFont
     *
     * @return string
     */
    public function getDefaultFont()
    {
        return $this->container['defaultFont'];
    }

    /*
     * Sets defaultFont
     *
     * @param string $defaultFont Default font for Pdf document. The following font will be used if a font is missing.
     *
     * @return $this
     */
    public function setDefaultFont($defaultFont)
    {
        $this->container['defaultFont'] = $defaultFont;

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
     * @param string $password Set password to unprotect protected document
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets removeJavascript
     *
     * @return bool
     */
    public function getRemoveJavascript()
    {
        return $this->container['removeJavascript'];
    }

    /*
     * Sets removeJavascript
     *
     * @param bool $removeJavascript Remove javascript
     *
     * @return $this
     */
    public function setRemoveJavascript($removeJavascript)
    {
        $this->container['removeJavascript'] = $removeJavascript;

        return $this;
    }

    /*
     * Gets removeEmbeddedFiles
     *
     * @return bool
     */
    public function getRemoveEmbeddedFiles()
    {
        return $this->container['removeEmbeddedFiles'];
    }

    /*
     * Sets removeEmbeddedFiles
     *
     * @param bool $removeEmbeddedFiles Remove embedded files
     *
     * @return $this
     */
    public function setRemoveEmbeddedFiles($removeEmbeddedFiles)
    {
        $this->container['removeEmbeddedFiles'] = $removeEmbeddedFiles;

        return $this;
    }

    /*
     * Gets fontSubstitutes
     *
     * @return map[string,string]
     */
    public function getFontSubstitutes()
    {
        return $this->container['fontSubstitutes'];
    }

    /*
     * Sets fontSubstitutes
     *
     * @param map[string,string] $fontSubstitutes Substitute specific fonts when converting Words document.
     *
     * @return $this
     */
    public function setFontSubstitutes($fontSubstitutes)
    {
        $this->container['fontSubstitutes'] = $fontSubstitutes;

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


