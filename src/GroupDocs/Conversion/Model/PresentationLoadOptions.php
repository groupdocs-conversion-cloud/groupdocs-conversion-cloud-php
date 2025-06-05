<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PresentationLoadOptions.php">
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
 * PresentationLoadOptions
 *
 * @description Presentation document load options
 */
class PresentationLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PresentationLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'preserveDocumentStructure' => 'bool',
        'clearCustomDocumentProperties' => 'bool',
        'clearBuiltInDocumentProperties' => 'bool',
        'depth' => 'int',
        'convertOwned' => 'bool',
        'convertOwner' => 'bool',
        'showHiddenSlides' => 'bool',
        'defaultFont' => 'string',
        'fontSubstitutes' => 'map[string,string]',
        'password' => 'string',
        'commentsPosition' => 'string',
        'notesPosition' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'preserveDocumentStructure' => null,
        'clearCustomDocumentProperties' => null,
        'clearBuiltInDocumentProperties' => null,
        'depth' => 'int32',
        'convertOwned' => null,
        'convertOwner' => null,
        'showHiddenSlides' => null,
        'defaultFont' => null,
        'fontSubstitutes' => null,
        'password' => null,
        'commentsPosition' => null,
        'notesPosition' => null
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
        'preserveDocumentStructure' => 'PreserveDocumentStructure',
        'clearCustomDocumentProperties' => 'ClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'ClearBuiltInDocumentProperties',
        'depth' => 'Depth',
        'convertOwned' => 'ConvertOwned',
        'convertOwner' => 'ConvertOwner',
        'showHiddenSlides' => 'ShowHiddenSlides',
        'defaultFont' => 'DefaultFont',
        'fontSubstitutes' => 'FontSubstitutes',
        'password' => 'Password',
        'commentsPosition' => 'CommentsPosition',
        'notesPosition' => 'NotesPosition'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preserveDocumentStructure' => 'setPreserveDocumentStructure',
        'clearCustomDocumentProperties' => 'setClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'setClearBuiltInDocumentProperties',
        'depth' => 'setDepth',
        'convertOwned' => 'setConvertOwned',
        'convertOwner' => 'setConvertOwner',
        'showHiddenSlides' => 'setShowHiddenSlides',
        'defaultFont' => 'setDefaultFont',
        'fontSubstitutes' => 'setFontSubstitutes',
        'password' => 'setPassword',
        'commentsPosition' => 'setCommentsPosition',
        'notesPosition' => 'setNotesPosition'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preserveDocumentStructure' => 'getPreserveDocumentStructure',
        'clearCustomDocumentProperties' => 'getClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'getClearBuiltInDocumentProperties',
        'depth' => 'getDepth',
        'convertOwned' => 'getConvertOwned',
        'convertOwner' => 'getConvertOwner',
        'showHiddenSlides' => 'getShowHiddenSlides',
        'defaultFont' => 'getDefaultFont',
        'fontSubstitutes' => 'getFontSubstitutes',
        'password' => 'getPassword',
        'commentsPosition' => 'getCommentsPosition',
        'notesPosition' => 'getNotesPosition'
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

    const COMMENTS_POSITION_NONE = 'None';
    const COMMENTS_POSITION_BOTTOM = 'Bottom';
    const COMMENTS_POSITION_RIGHT = 'Right';
    const NOTES_POSITION_NONE = 'None';
    const NOTES_POSITION_BOTTOM_TRUNCATED = 'BottomTruncated';
    const NOTES_POSITION_BOTTOM_FULL = 'BottomFull';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCommentsPositionAllowableValues()
    {
        return [
            self::COMMENTS_POSITION_NONE,
            self::COMMENTS_POSITION_BOTTOM,
            self::COMMENTS_POSITION_RIGHT,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotesPositionAllowableValues()
    {
        return [
            self::NOTES_POSITION_NONE,
            self::NOTES_POSITION_BOTTOM_TRUNCATED,
            self::NOTES_POSITION_BOTTOM_FULL,
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

        $this->container['preserveDocumentStructure'] = isset($data['preserveDocumentStructure']) ? $data['preserveDocumentStructure'] : null;
        $this->container['clearCustomDocumentProperties'] = isset($data['clearCustomDocumentProperties']) ? $data['clearCustomDocumentProperties'] : null;
        $this->container['clearBuiltInDocumentProperties'] = isset($data['clearBuiltInDocumentProperties']) ? $data['clearBuiltInDocumentProperties'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['convertOwned'] = isset($data['convertOwned']) ? $data['convertOwned'] : null;
        $this->container['convertOwner'] = isset($data['convertOwner']) ? $data['convertOwner'] : null;
        $this->container['showHiddenSlides'] = isset($data['showHiddenSlides']) ? $data['showHiddenSlides'] : null;
        $this->container['defaultFont'] = isset($data['defaultFont']) ? $data['defaultFont'] : null;
        $this->container['fontSubstitutes'] = isset($data['fontSubstitutes']) ? $data['fontSubstitutes'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['commentsPosition'] = isset($data['commentsPosition']) ? $data['commentsPosition'] : null;
        $this->container['notesPosition'] = isset($data['notesPosition']) ? $data['notesPosition'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['preserveDocumentStructure'] === null) {
            $invalidProperties[] = "'preserveDocumentStructure' can't be null";
        }
        if ($this->container['clearCustomDocumentProperties'] === null) {
            $invalidProperties[] = "'clearCustomDocumentProperties' can't be null";
        }
        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            $invalidProperties[] = "'clearBuiltInDocumentProperties' can't be null";
        }
        if ($this->container['depth'] === null) {
            $invalidProperties[] = "'depth' can't be null";
        }
        if ($this->container['convertOwned'] === null) {
            $invalidProperties[] = "'convertOwned' can't be null";
        }
        if ($this->container['convertOwner'] === null) {
            $invalidProperties[] = "'convertOwner' can't be null";
        }
        if ($this->container['showHiddenSlides'] === null) {
            $invalidProperties[] = "'showHiddenSlides' can't be null";
        }
        if ($this->container['commentsPosition'] === null) {
            $invalidProperties[] = "'commentsPosition' can't be null";
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['commentsPosition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'commentsPosition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['notesPosition'] === null) {
            $invalidProperties[] = "'notesPosition' can't be null";
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notesPosition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'notesPosition', must be one of '%s'",
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

        if ($this->container['preserveDocumentStructure'] === null) {
            return false;
        }
        if ($this->container['clearCustomDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['depth'] === null) {
            return false;
        }
        if ($this->container['convertOwned'] === null) {
            return false;
        }
        if ($this->container['convertOwner'] === null) {
            return false;
        }
        if ($this->container['showHiddenSlides'] === null) {
            return false;
        }
        if ($this->container['commentsPosition'] === null) {
            return false;
        }
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if (!in_array($this->container['commentsPosition'], $allowedValues)) {
            return false;
        }
        if ($this->container['notesPosition'] === null) {
            return false;
        }
        $allowedValues = $this->getNotesPositionAllowableValues();
        if (!in_array($this->container['notesPosition'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets preserveDocumentStructure
     *
     * @return bool
     */
    public function getPreserveDocumentStructure()
    {
        return $this->container['preserveDocumentStructure'];
    }

    /*
     * Sets preserveDocumentStructure
     *
     * @param bool $preserveDocumentStructure Determines whether the document structure should be preserved when converting     to PDF (default is false).
     *
     * @return $this
     */
    public function setPreserveDocumentStructure($preserveDocumentStructure)
    {
        $this->container['preserveDocumentStructure'] = $preserveDocumentStructure;

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
     * @param bool $clearCustomDocumentProperties Value indicating whether custom document properties should be cleared.
     *
     * @return $this
     */
    public function setClearCustomDocumentProperties($clearCustomDocumentProperties)
    {
        $this->container['clearCustomDocumentProperties'] = $clearCustomDocumentProperties;

        return $this;
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
     * @param bool $clearBuiltInDocumentProperties Value indicating whether built in document properties should be cleared.
     *
     * @return $this
     */
    public function setClearBuiltInDocumentProperties($clearBuiltInDocumentProperties)
    {
        $this->container['clearBuiltInDocumentProperties'] = $clearBuiltInDocumentProperties;

        return $this;
    }

    /*
     * Gets depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /*
     * Sets depth
     *
     * @param int $depth Option to control how many levels in depth to perform conversion     Default: 1
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /*
     * Gets convertOwned
     *
     * @return bool
     */
    public function getConvertOwned()
    {
        return $this->container['convertOwned'];
    }

    /*
     * Sets convertOwned
     *
     * @param bool $convertOwned Option to control whether the owned documents in the documents container must     be converted
     *
     * @return $this
     */
    public function setConvertOwned($convertOwned)
    {
        $this->container['convertOwned'] = $convertOwned;

        return $this;
    }

    /*
     * Gets convertOwner
     *
     * @return bool
     */
    public function getConvertOwner()
    {
        return $this->container['convertOwner'];
    }

    /*
     * Sets convertOwner
     *
     * @param bool $convertOwner Option to control whether the documents container itself must be converted If     this property is true the documents container will be the first converted document     Default is true
     *
     * @return $this
     */
    public function setConvertOwner($convertOwner)
    {
        $this->container['convertOwner'] = $convertOwner;

        return $this;
    }

    /*
     * Gets showHiddenSlides
     *
     * @return bool
     */
    public function getShowHiddenSlides()
    {
        return $this->container['showHiddenSlides'];
    }

    /*
     * Sets showHiddenSlides
     *
     * @param bool $showHiddenSlides Show hidden slides.
     *
     * @return $this
     */
    public function setShowHiddenSlides($showHiddenSlides)
    {
        $this->container['showHiddenSlides'] = $showHiddenSlides;

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
     * @param string $defaultFont Default font for rendering the presentation. The following font will be used if a presentation font is missing.
     *
     * @return $this
     */
    public function setDefaultFont($defaultFont)
    {
        $this->container['defaultFont'] = $defaultFont;

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
     * @param map[string,string] $fontSubstitutes Substitute specific fonts when converting Slides document.
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
     * Gets commentsPosition
     *
     * @return string
     */
    public function getCommentsPosition()
    {
        return $this->container['commentsPosition'];
    }

    /*
     * Sets commentsPosition
     *
     * @param string $commentsPosition Represents the way comments are printed with the slide. Default is None.
     *
     * @return $this
     */
    public function setCommentsPosition($commentsPosition)
    {
        $allowedValues = $this->getCommentsPositionAllowableValues();
        if ((!is_numeric($commentsPosition) && !in_array($commentsPosition, $allowedValues)) || (is_numeric($commentsPosition) && !in_array($allowedValues[$commentsPosition], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'commentsPosition', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['commentsPosition'] = $commentsPosition;

        return $this;
    }

    /*
     * Gets notesPosition
     *
     * @return string
     */
    public function getNotesPosition()
    {
        return $this->container['notesPosition'];
    }

    /*
     * Sets notesPosition
     *
     * @param string $notesPosition Represents the way notes are printed with the slide. Default is None.
     *
     * @return $this
     */
    public function setNotesPosition($notesPosition)
    {
        $allowedValues = $this->getNotesPositionAllowableValues();
        if ((!is_numeric($notesPosition) && !in_array($notesPosition, $allowedValues)) || (is_numeric($notesPosition) && !in_array($allowedValues[$notesPosition], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'notesPosition', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['notesPosition'] = $notesPosition;

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


