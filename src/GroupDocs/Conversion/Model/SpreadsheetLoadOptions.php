<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SpreadsheetLoadOptions.php">
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
 * SpreadsheetLoadOptions
 *
 * @description Spreadsheet document load options
 */
class SpreadsheetLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SpreadsheetLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'clearCustomDocumentProperties' => 'bool',
        'clearBuiltInDocumentProperties' => 'bool',
        'rowsPerPage' => 'int',
        'columnsPerPage' => 'int',
        'autoFitRows' => 'bool',
        'allColumnsInOnePagePerSheet' => 'bool',
        'cultureInfo' => 'string',
        'checkExcelRestriction' => 'bool',
        'password' => 'string',
        'skipEmptyRowsAndColumns' => 'bool',
        'convertRange' => 'string',
        'optimizePdfSize' => 'bool',
        'onePagePerSheet' => 'bool',
        'showHiddenSheets' => 'bool',
        'showGridLines' => 'bool',
        'fontSubstitutes' => 'map[string,string]',
        'defaultFont' => 'string',
        'sheetIndexes' => 'int[]',
        'sheets' => 'string[]',
        'printComments' => 'string',
        'resetFontFolders' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'clearCustomDocumentProperties' => null,
        'clearBuiltInDocumentProperties' => null,
        'rowsPerPage' => 'int32',
        'columnsPerPage' => 'int32',
        'autoFitRows' => null,
        'allColumnsInOnePagePerSheet' => null,
        'cultureInfo' => null,
        'checkExcelRestriction' => null,
        'password' => null,
        'skipEmptyRowsAndColumns' => null,
        'convertRange' => null,
        'optimizePdfSize' => null,
        'onePagePerSheet' => null,
        'showHiddenSheets' => null,
        'showGridLines' => null,
        'fontSubstitutes' => null,
        'defaultFont' => null,
        'sheetIndexes' => 'int32',
        'sheets' => null,
        'printComments' => null,
        'resetFontFolders' => null
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
        'clearCustomDocumentProperties' => 'ClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'ClearBuiltInDocumentProperties',
        'rowsPerPage' => 'RowsPerPage',
        'columnsPerPage' => 'ColumnsPerPage',
        'autoFitRows' => 'AutoFitRows',
        'allColumnsInOnePagePerSheet' => 'AllColumnsInOnePagePerSheet',
        'cultureInfo' => 'CultureInfo',
        'checkExcelRestriction' => 'CheckExcelRestriction',
        'password' => 'Password',
        'skipEmptyRowsAndColumns' => 'SkipEmptyRowsAndColumns',
        'convertRange' => 'ConvertRange',
        'optimizePdfSize' => 'OptimizePdfSize',
        'onePagePerSheet' => 'OnePagePerSheet',
        'showHiddenSheets' => 'ShowHiddenSheets',
        'showGridLines' => 'ShowGridLines',
        'fontSubstitutes' => 'FontSubstitutes',
        'defaultFont' => 'DefaultFont',
        'sheetIndexes' => 'SheetIndexes',
        'sheets' => 'Sheets',
        'printComments' => 'PrintComments',
        'resetFontFolders' => 'ResetFontFolders'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clearCustomDocumentProperties' => 'setClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'setClearBuiltInDocumentProperties',
        'rowsPerPage' => 'setRowsPerPage',
        'columnsPerPage' => 'setColumnsPerPage',
        'autoFitRows' => 'setAutoFitRows',
        'allColumnsInOnePagePerSheet' => 'setAllColumnsInOnePagePerSheet',
        'cultureInfo' => 'setCultureInfo',
        'checkExcelRestriction' => 'setCheckExcelRestriction',
        'password' => 'setPassword',
        'skipEmptyRowsAndColumns' => 'setSkipEmptyRowsAndColumns',
        'convertRange' => 'setConvertRange',
        'optimizePdfSize' => 'setOptimizePdfSize',
        'onePagePerSheet' => 'setOnePagePerSheet',
        'showHiddenSheets' => 'setShowHiddenSheets',
        'showGridLines' => 'setShowGridLines',
        'fontSubstitutes' => 'setFontSubstitutes',
        'defaultFont' => 'setDefaultFont',
        'sheetIndexes' => 'setSheetIndexes',
        'sheets' => 'setSheets',
        'printComments' => 'setPrintComments',
        'resetFontFolders' => 'setResetFontFolders'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clearCustomDocumentProperties' => 'getClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'getClearBuiltInDocumentProperties',
        'rowsPerPage' => 'getRowsPerPage',
        'columnsPerPage' => 'getColumnsPerPage',
        'autoFitRows' => 'getAutoFitRows',
        'allColumnsInOnePagePerSheet' => 'getAllColumnsInOnePagePerSheet',
        'cultureInfo' => 'getCultureInfo',
        'checkExcelRestriction' => 'getCheckExcelRestriction',
        'password' => 'getPassword',
        'skipEmptyRowsAndColumns' => 'getSkipEmptyRowsAndColumns',
        'convertRange' => 'getConvertRange',
        'optimizePdfSize' => 'getOptimizePdfSize',
        'onePagePerSheet' => 'getOnePagePerSheet',
        'showHiddenSheets' => 'getShowHiddenSheets',
        'showGridLines' => 'getShowGridLines',
        'fontSubstitutes' => 'getFontSubstitutes',
        'defaultFont' => 'getDefaultFont',
        'sheetIndexes' => 'getSheetIndexes',
        'sheets' => 'getSheets',
        'printComments' => 'getPrintComments',
        'resetFontFolders' => 'getResetFontFolders'
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

    const PRINT_COMMENTS_PRINT_IN_PLACE = 'PrintInPlace';
    const PRINT_COMMENTS_PRINT_NO_COMMENTS = 'PrintNoComments';
    const PRINT_COMMENTS_PRINT_SHEET_END = 'PrintSheetEnd';
    const PRINT_COMMENTS_PRINT_WITH_THREADED_COMMENTS = 'PrintWithThreadedComments';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrintCommentsAllowableValues()
    {
        return [
            self::PRINT_COMMENTS_PRINT_IN_PLACE,
            self::PRINT_COMMENTS_PRINT_NO_COMMENTS,
            self::PRINT_COMMENTS_PRINT_SHEET_END,
            self::PRINT_COMMENTS_PRINT_WITH_THREADED_COMMENTS,
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

        $this->container['clearCustomDocumentProperties'] = isset($data['clearCustomDocumentProperties']) ? $data['clearCustomDocumentProperties'] : null;
        $this->container['clearBuiltInDocumentProperties'] = isset($data['clearBuiltInDocumentProperties']) ? $data['clearBuiltInDocumentProperties'] : null;
        $this->container['rowsPerPage'] = isset($data['rowsPerPage']) ? $data['rowsPerPage'] : null;
        $this->container['columnsPerPage'] = isset($data['columnsPerPage']) ? $data['columnsPerPage'] : null;
        $this->container['autoFitRows'] = isset($data['autoFitRows']) ? $data['autoFitRows'] : null;
        $this->container['allColumnsInOnePagePerSheet'] = isset($data['allColumnsInOnePagePerSheet']) ? $data['allColumnsInOnePagePerSheet'] : null;
        $this->container['cultureInfo'] = isset($data['cultureInfo']) ? $data['cultureInfo'] : null;
        $this->container['checkExcelRestriction'] = isset($data['checkExcelRestriction']) ? $data['checkExcelRestriction'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['skipEmptyRowsAndColumns'] = isset($data['skipEmptyRowsAndColumns']) ? $data['skipEmptyRowsAndColumns'] : null;
        $this->container['convertRange'] = isset($data['convertRange']) ? $data['convertRange'] : null;
        $this->container['optimizePdfSize'] = isset($data['optimizePdfSize']) ? $data['optimizePdfSize'] : null;
        $this->container['onePagePerSheet'] = isset($data['onePagePerSheet']) ? $data['onePagePerSheet'] : null;
        $this->container['showHiddenSheets'] = isset($data['showHiddenSheets']) ? $data['showHiddenSheets'] : null;
        $this->container['showGridLines'] = isset($data['showGridLines']) ? $data['showGridLines'] : null;
        $this->container['fontSubstitutes'] = isset($data['fontSubstitutes']) ? $data['fontSubstitutes'] : null;
        $this->container['defaultFont'] = isset($data['defaultFont']) ? $data['defaultFont'] : null;
        $this->container['sheetIndexes'] = isset($data['sheetIndexes']) ? $data['sheetIndexes'] : null;
        $this->container['sheets'] = isset($data['sheets']) ? $data['sheets'] : null;
        $this->container['printComments'] = isset($data['printComments']) ? $data['printComments'] : null;
        $this->container['resetFontFolders'] = isset($data['resetFontFolders']) ? $data['resetFontFolders'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['clearCustomDocumentProperties'] === null) {
            $invalidProperties[] = "'clearCustomDocumentProperties' can't be null";
        }
        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            $invalidProperties[] = "'clearBuiltInDocumentProperties' can't be null";
        }
        if ($this->container['rowsPerPage'] === null) {
            $invalidProperties[] = "'rowsPerPage' can't be null";
        }
        if ($this->container['columnsPerPage'] === null) {
            $invalidProperties[] = "'columnsPerPage' can't be null";
        }
        if ($this->container['autoFitRows'] === null) {
            $invalidProperties[] = "'autoFitRows' can't be null";
        }
        if ($this->container['allColumnsInOnePagePerSheet'] === null) {
            $invalidProperties[] = "'allColumnsInOnePagePerSheet' can't be null";
        }
        if ($this->container['checkExcelRestriction'] === null) {
            $invalidProperties[] = "'checkExcelRestriction' can't be null";
        }
        if ($this->container['skipEmptyRowsAndColumns'] === null) {
            $invalidProperties[] = "'skipEmptyRowsAndColumns' can't be null";
        }
        if ($this->container['optimizePdfSize'] === null) {
            $invalidProperties[] = "'optimizePdfSize' can't be null";
        }
        if ($this->container['onePagePerSheet'] === null) {
            $invalidProperties[] = "'onePagePerSheet' can't be null";
        }
        if ($this->container['showHiddenSheets'] === null) {
            $invalidProperties[] = "'showHiddenSheets' can't be null";
        }
        if ($this->container['showGridLines'] === null) {
            $invalidProperties[] = "'showGridLines' can't be null";
        }
        if ($this->container['printComments'] === null) {
            $invalidProperties[] = "'printComments' can't be null";
        }
        $allowedValues = $this->getPrintCommentsAllowableValues();
        if (!in_array($this->container['printComments'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'printComments', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['resetFontFolders'] === null) {
            $invalidProperties[] = "'resetFontFolders' can't be null";
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

        if ($this->container['clearCustomDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['rowsPerPage'] === null) {
            return false;
        }
        if ($this->container['columnsPerPage'] === null) {
            return false;
        }
        if ($this->container['autoFitRows'] === null) {
            return false;
        }
        if ($this->container['allColumnsInOnePagePerSheet'] === null) {
            return false;
        }
        if ($this->container['checkExcelRestriction'] === null) {
            return false;
        }
        if ($this->container['skipEmptyRowsAndColumns'] === null) {
            return false;
        }
        if ($this->container['optimizePdfSize'] === null) {
            return false;
        }
        if ($this->container['onePagePerSheet'] === null) {
            return false;
        }
        if ($this->container['showHiddenSheets'] === null) {
            return false;
        }
        if ($this->container['showGridLines'] === null) {
            return false;
        }
        if ($this->container['printComments'] === null) {
            return false;
        }
        $allowedValues = $this->getPrintCommentsAllowableValues();
        if (!in_array($this->container['printComments'], $allowedValues)) {
            return false;
        }
        if ($this->container['resetFontFolders'] === null) {
            return false;
        }
        return true;
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
     * @param bool $clearCustomDocumentProperties Clear custom document properties. Default is false.
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
     * @param bool $clearBuiltInDocumentProperties Clear built-in document properties. Default is false.
     *
     * @return $this
     */
    public function setClearBuiltInDocumentProperties($clearBuiltInDocumentProperties)
    {
        $this->container['clearBuiltInDocumentProperties'] = $clearBuiltInDocumentProperties;

        return $this;
    }

    /*
     * Gets rowsPerPage
     *
     * @return int
     */
    public function getRowsPerPage()
    {
        return $this->container['rowsPerPage'];
    }

    /*
     * Sets rowsPerPage
     *
     * @param int $rowsPerPage Split a worksheet into pages by rows. Default is 0, no pagination.
     *
     * @return $this
     */
    public function setRowsPerPage($rowsPerPage)
    {
        $this->container['rowsPerPage'] = $rowsPerPage;

        return $this;
    }

    /*
     * Gets columnsPerPage
     *
     * @return int
     */
    public function getColumnsPerPage()
    {
        return $this->container['columnsPerPage'];
    }

    /*
     * Sets columnsPerPage
     *
     * @param int $columnsPerPage Split a worksheet into pages by columns. Default is 0, no pagination.
     *
     * @return $this
     */
    public function setColumnsPerPage($columnsPerPage)
    {
        $this->container['columnsPerPage'] = $columnsPerPage;

        return $this;
    }

    /*
     * Gets autoFitRows
     *
     * @return bool
     */
    public function getAutoFitRows()
    {
        return $this->container['autoFitRows'];
    }

    /*
     * Sets autoFitRows
     *
     * @param bool $autoFitRows Autofits all rows when converting
     *
     * @return $this
     */
    public function setAutoFitRows($autoFitRows)
    {
        $this->container['autoFitRows'] = $autoFitRows;

        return $this;
    }

    /*
     * Gets allColumnsInOnePagePerSheet
     *
     * @return bool
     */
    public function getAllColumnsInOnePagePerSheet()
    {
        return $this->container['allColumnsInOnePagePerSheet'];
    }

    /*
     * Sets allColumnsInOnePagePerSheet
     *
     * @param bool $allColumnsInOnePagePerSheet If AllColumnsInOnePagePerSheet is true, all column content of one sheet will output to only one page in result. The width of paper size of pagesetup will be invalid, and the other settings of pagesetup will still take effect.
     *
     * @return $this
     */
    public function setAllColumnsInOnePagePerSheet($allColumnsInOnePagePerSheet)
    {
        $this->container['allColumnsInOnePagePerSheet'] = $allColumnsInOnePagePerSheet;

        return $this;
    }

    /*
     * Gets cultureInfo
     *
     * @return string
     */
    public function getCultureInfo()
    {
        return $this->container['cultureInfo'];
    }

    /*
     * Sets cultureInfo
     *
     * @param string $cultureInfo System culture info at the time file is loaded
     *
     * @return $this
     */
    public function setCultureInfo($cultureInfo)
    {
        $this->container['cultureInfo'] = $cultureInfo;

        return $this;
    }

    /*
     * Gets checkExcelRestriction
     *
     * @return bool
     */
    public function getCheckExcelRestriction()
    {
        return $this->container['checkExcelRestriction'];
    }

    /*
     * Sets checkExcelRestriction
     *
     * @param bool $checkExcelRestriction Whether check restriction of excel file when user modify cells related objects. For example, excel does not allow inputting string value longer than 32K. When you input a value longer than 32K, if this property is true, you will get an Exception. If this property is false, we will accept your input string value as the cell's value so that later you can output the complete string value for other file formats such as CSV. However, if you have set such kind of value that is invalid for excel file format, you should not save the workbook as excel file format later. Otherwise there may be unexpected error for the generated excel file.
     *
     * @return $this
     */
    public function setCheckExcelRestriction($checkExcelRestriction)
    {
        $this->container['checkExcelRestriction'] = $checkExcelRestriction;

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
     * Gets skipEmptyRowsAndColumns
     *
     * @return bool
     */
    public function getSkipEmptyRowsAndColumns()
    {
        return $this->container['skipEmptyRowsAndColumns'];
    }

    /*
     * Sets skipEmptyRowsAndColumns
     *
     * @param bool $skipEmptyRowsAndColumns Skips empty rows and columns when converting. Default is True.
     *
     * @return $this
     */
    public function setSkipEmptyRowsAndColumns($skipEmptyRowsAndColumns)
    {
        $this->container['skipEmptyRowsAndColumns'] = $skipEmptyRowsAndColumns;

        return $this;
    }

    /*
     * Gets convertRange
     *
     * @return string
     */
    public function getConvertRange()
    {
        return $this->container['convertRange'];
    }

    /*
     * Sets convertRange
     *
     * @param string $convertRange Convert specific range when converting to other than cells format. Example: \"D1:F8\"
     *
     * @return $this
     */
    public function setConvertRange($convertRange)
    {
        $this->container['convertRange'] = $convertRange;

        return $this;
    }

    /*
     * Gets optimizePdfSize
     *
     * @return bool
     */
    public function getOptimizePdfSize()
    {
        return $this->container['optimizePdfSize'];
    }

    /*
     * Sets optimizePdfSize
     *
     * @param bool $optimizePdfSize If True and converting to Pdf the conversion is optimized for better file size than print quality.
     *
     * @return $this
     */
    public function setOptimizePdfSize($optimizePdfSize)
    {
        $this->container['optimizePdfSize'] = $optimizePdfSize;

        return $this;
    }

    /*
     * Gets onePagePerSheet
     *
     * @return bool
     */
    public function getOnePagePerSheet()
    {
        return $this->container['onePagePerSheet'];
    }

    /*
     * Sets onePagePerSheet
     *
     * @param bool $onePagePerSheet If OnePagePerSheet is true the content of the sheet will be converted to one page in the PDF document. Default value is true.
     *
     * @return $this
     */
    public function setOnePagePerSheet($onePagePerSheet)
    {
        $this->container['onePagePerSheet'] = $onePagePerSheet;

        return $this;
    }

    /*
     * Gets showHiddenSheets
     *
     * @return bool
     */
    public function getShowHiddenSheets()
    {
        return $this->container['showHiddenSheets'];
    }

    /*
     * Sets showHiddenSheets
     *
     * @param bool $showHiddenSheets Show hidden sheets when converting Excel files
     *
     * @return $this
     */
    public function setShowHiddenSheets($showHiddenSheets)
    {
        $this->container['showHiddenSheets'] = $showHiddenSheets;

        return $this;
    }

    /*
     * Gets showGridLines
     *
     * @return bool
     */
    public function getShowGridLines()
    {
        return $this->container['showGridLines'];
    }

    /*
     * Sets showGridLines
     *
     * @param bool $showGridLines Show grid lines when converting Excel files
     *
     * @return $this
     */
    public function setShowGridLines($showGridLines)
    {
        $this->container['showGridLines'] = $showGridLines;

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
     * @param map[string,string] $fontSubstitutes Substitute specific fonts when converting Cells document.
     *
     * @return $this
     */
    public function setFontSubstitutes($fontSubstitutes)
    {
        $this->container['fontSubstitutes'] = $fontSubstitutes;

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
     * @param string $defaultFont Default font for Cells document. The following font will be used if a font is missing.
     *
     * @return $this
     */
    public function setDefaultFont($defaultFont)
    {
        $this->container['defaultFont'] = $defaultFont;

        return $this;
    }

    /*
     * Gets sheetIndexes
     *
     * @return int[]
     */
    public function getSheetIndexes()
    {
        return $this->container['sheetIndexes'];
    }

    /*
     * Sets sheetIndexes
     *
     * @param int[] $sheetIndexes List of sheet indexes to convert. The indexes must be zero-based
     *
     * @return $this
     */
    public function setSheetIndexes($sheetIndexes)
    {
        $this->container['sheetIndexes'] = $sheetIndexes;

        return $this;
    }

    /*
     * Gets sheets
     *
     * @return string[]
     */
    public function getSheets()
    {
        return $this->container['sheets'];
    }

    /*
     * Sets sheets
     *
     * @param string[] $sheets List of sheet names to convert
     *
     * @return $this
     */
    public function setSheets($sheets)
    {
        $this->container['sheets'] = $sheets;

        return $this;
    }

    /*
     * Gets printComments
     *
     * @return string
     */
    public function getPrintComments()
    {
        return $this->container['printComments'];
    }

    /*
     * Sets printComments
     *
     * @param string $printComments Represents the way comments are printed with the sheet. Default is PrintNoComments.
     *
     * @return $this
     */
    public function setPrintComments($printComments)
    {
        $allowedValues = $this->getPrintCommentsAllowableValues();
        if ((!is_numeric($printComments) && !in_array($printComments, $allowedValues)) || (is_numeric($printComments) && !in_array($allowedValues[$printComments], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'printComments', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['printComments'] = $printComments;

        return $this;
    }

    /*
     * Gets resetFontFolders
     *
     * @return bool
     */
    public function getResetFontFolders()
    {
        return $this->container['resetFontFolders'];
    }

    /*
     * Sets resetFontFolders
     *
     * @param bool $resetFontFolders Reset font folders before loading document
     *
     * @return $this
     */
    public function setResetFontFolders($resetFontFolders)
    {
        $this->container['resetFontFolders'] = $resetFontFolders;

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


