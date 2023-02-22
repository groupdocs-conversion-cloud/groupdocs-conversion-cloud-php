<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WordProcessingLoadOptions.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
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
 * WordProcessingLoadOptions
 *
 * @description WordProcessing document load options
 */
class WordProcessingLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WordProcessingLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'defaultFont' => 'string',
        'autoFontSubstitution' => 'bool',
        'fontSubstitutes' => 'map[string,string]',
        'password' => 'string',
        'hideWordTrackedChanges' => 'bool',
        'hideComments' => 'bool',
        'bookmarksOutlineLevel' => 'int',
        'headingsOutlineLevels' => 'int',
        'expandedOutlineLevels' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'defaultFont' => null,
        'autoFontSubstitution' => null,
        'fontSubstitutes' => null,
        'password' => null,
        'hideWordTrackedChanges' => null,
        'hideComments' => null,
        'bookmarksOutlineLevel' => 'int32',
        'headingsOutlineLevels' => 'int32',
        'expandedOutlineLevels' => 'int32'
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
        'defaultFont' => 'DefaultFont',
        'autoFontSubstitution' => 'AutoFontSubstitution',
        'fontSubstitutes' => 'FontSubstitutes',
        'password' => 'Password',
        'hideWordTrackedChanges' => 'HideWordTrackedChanges',
        'hideComments' => 'HideComments',
        'bookmarksOutlineLevel' => 'BookmarksOutlineLevel',
        'headingsOutlineLevels' => 'HeadingsOutlineLevels',
        'expandedOutlineLevels' => 'ExpandedOutlineLevels'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultFont' => 'setDefaultFont',
        'autoFontSubstitution' => 'setAutoFontSubstitution',
        'fontSubstitutes' => 'setFontSubstitutes',
        'password' => 'setPassword',
        'hideWordTrackedChanges' => 'setHideWordTrackedChanges',
        'hideComments' => 'setHideComments',
        'bookmarksOutlineLevel' => 'setBookmarksOutlineLevel',
        'headingsOutlineLevels' => 'setHeadingsOutlineLevels',
        'expandedOutlineLevels' => 'setExpandedOutlineLevels'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultFont' => 'getDefaultFont',
        'autoFontSubstitution' => 'getAutoFontSubstitution',
        'fontSubstitutes' => 'getFontSubstitutes',
        'password' => 'getPassword',
        'hideWordTrackedChanges' => 'getHideWordTrackedChanges',
        'hideComments' => 'getHideComments',
        'bookmarksOutlineLevel' => 'getBookmarksOutlineLevel',
        'headingsOutlineLevels' => 'getHeadingsOutlineLevels',
        'expandedOutlineLevels' => 'getExpandedOutlineLevels'
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

        $this->container['defaultFont'] = isset($data['defaultFont']) ? $data['defaultFont'] : null;
        $this->container['autoFontSubstitution'] = isset($data['autoFontSubstitution']) ? $data['autoFontSubstitution'] : null;
        $this->container['fontSubstitutes'] = isset($data['fontSubstitutes']) ? $data['fontSubstitutes'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['hideWordTrackedChanges'] = isset($data['hideWordTrackedChanges']) ? $data['hideWordTrackedChanges'] : null;
        $this->container['hideComments'] = isset($data['hideComments']) ? $data['hideComments'] : null;
        $this->container['bookmarksOutlineLevel'] = isset($data['bookmarksOutlineLevel']) ? $data['bookmarksOutlineLevel'] : null;
        $this->container['headingsOutlineLevels'] = isset($data['headingsOutlineLevels']) ? $data['headingsOutlineLevels'] : null;
        $this->container['expandedOutlineLevels'] = isset($data['expandedOutlineLevels']) ? $data['expandedOutlineLevels'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['autoFontSubstitution'] === null) {
            $invalidProperties[] = "'autoFontSubstitution' can't be null";
        }
        if ($this->container['hideWordTrackedChanges'] === null) {
            $invalidProperties[] = "'hideWordTrackedChanges' can't be null";
        }
        if ($this->container['hideComments'] === null) {
            $invalidProperties[] = "'hideComments' can't be null";
        }
        if ($this->container['bookmarksOutlineLevel'] === null) {
            $invalidProperties[] = "'bookmarksOutlineLevel' can't be null";
        }
        if ($this->container['headingsOutlineLevels'] === null) {
            $invalidProperties[] = "'headingsOutlineLevels' can't be null";
        }
        if ($this->container['expandedOutlineLevels'] === null) {
            $invalidProperties[] = "'expandedOutlineLevels' can't be null";
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

        if ($this->container['autoFontSubstitution'] === null) {
            return false;
        }
        if ($this->container['hideWordTrackedChanges'] === null) {
            return false;
        }
        if ($this->container['hideComments'] === null) {
            return false;
        }
        if ($this->container['bookmarksOutlineLevel'] === null) {
            return false;
        }
        if ($this->container['headingsOutlineLevels'] === null) {
            return false;
        }
        if ($this->container['expandedOutlineLevels'] === null) {
            return false;
        }
        return true;
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
     * @param string $defaultFont Default font for Words document. The following font will be used if a font is missing.
     *
     * @return $this
     */
    public function setDefaultFont($defaultFont)
    {
        $this->container['defaultFont'] = $defaultFont;

        return $this;
    }

    /*
     * Gets autoFontSubstitution
     *
     * @return bool
     */
    public function getAutoFontSubstitution()
    {
        return $this->container['autoFontSubstitution'];
    }

    /*
     * Sets autoFontSubstitution
     *
     * @param bool $autoFontSubstitution If AutoFontSubstitution is disabled, GroupDocs.Conversion uses the DefaultFont for the substitution of missing fonts. If AutoFontSubstitution is enabled, GroupDocs.Conversion evaluates all the related fields in FontInfo (Panose, Sig etc) for the missing font and finds the closest match among the available font sources. Note that font substitution mechanism will override the DefaultFont in cases when FontInfo for the missing font is available in the document. The default value is True.
     *
     * @return $this
     */
    public function setAutoFontSubstitution($autoFontSubstitution)
    {
        $this->container['autoFontSubstitution'] = $autoFontSubstitution;

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
     * Gets hideWordTrackedChanges
     *
     * @return bool
     */
    public function getHideWordTrackedChanges()
    {
        return $this->container['hideWordTrackedChanges'];
    }

    /*
     * Sets hideWordTrackedChanges
     *
     * @param bool $hideWordTrackedChanges Hide markup and track changes for Word documents
     *
     * @return $this
     */
    public function setHideWordTrackedChanges($hideWordTrackedChanges)
    {
        $this->container['hideWordTrackedChanges'] = $hideWordTrackedChanges;

        return $this;
    }

    /*
     * Gets hideComments
     *
     * @return bool
     */
    public function getHideComments()
    {
        return $this->container['hideComments'];
    }

    /*
     * Sets hideComments
     *
     * @param bool $hideComments Hide comments
     *
     * @return $this
     */
    public function setHideComments($hideComments)
    {
        $this->container['hideComments'] = $hideComments;

        return $this;
    }

    /*
     * Gets bookmarksOutlineLevel
     *
     * @return int
     */
    public function getBookmarksOutlineLevel()
    {
        return $this->container['bookmarksOutlineLevel'];
    }

    /*
     * Sets bookmarksOutlineLevel
     *
     * @param int $bookmarksOutlineLevel Specifies the default level in the document outline at which to display Word bookmarks. Default is 0. Valid range is 0 to 9.
     *
     * @return $this
     */
    public function setBookmarksOutlineLevel($bookmarksOutlineLevel)
    {
        $this->container['bookmarksOutlineLevel'] = $bookmarksOutlineLevel;

        return $this;
    }

    /*
     * Gets headingsOutlineLevels
     *
     * @return int
     */
    public function getHeadingsOutlineLevels()
    {
        return $this->container['headingsOutlineLevels'];
    }

    /*
     * Sets headingsOutlineLevels
     *
     * @param int $headingsOutlineLevels Specifies how many levels of headings (paragraphs formatted with the Heading styles) to include in the document outline. Default is 0. Valid range is 0 to 9.
     *
     * @return $this
     */
    public function setHeadingsOutlineLevels($headingsOutlineLevels)
    {
        $this->container['headingsOutlineLevels'] = $headingsOutlineLevels;

        return $this;
    }

    /*
     * Gets expandedOutlineLevels
     *
     * @return int
     */
    public function getExpandedOutlineLevels()
    {
        return $this->container['expandedOutlineLevels'];
    }

    /*
     * Sets expandedOutlineLevels
     *
     * @param int $expandedOutlineLevels Specifies how many levels in the document outline to show expanded when the file is viewed. Default is 0. Valid range is 0 to 9. Note that this options will not work when saving to XPS.
     *
     * @return $this
     */
    public function setExpandedOutlineLevels($expandedOutlineLevels)
    {
        $this->container['expandedOutlineLevels'] = $expandedOutlineLevels;

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


