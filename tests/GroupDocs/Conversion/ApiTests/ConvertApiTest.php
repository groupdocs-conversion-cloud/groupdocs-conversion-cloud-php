<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="AuthApiTest.php">
*   Copyright (c) Aspose Pty Ltd
* </copyright>
* <summary>
*  Permission is hereby granted, free of charge, to any person obtaining a copy
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
namespace GroupDocs\Conversion\ApiTests;

use GroupDocs\Conversion\Configuration;
use GroupDocs\Conversion\ConvertApi;
use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

class ConvertApiTest extends BaseApiTestCase
{
    /**
     * Converts source document to specified type
     *
     */
    public function testConvertDocument() {
        $convertSettings = new Model\ConvertSettings();
        $convertSettings->setFilePath(Internal\TestFiles::getFileOnePageDocx()->getPath());
        $convertSettings->setFormat("jpg");
        $convertSettings->setConvertOptions(new Model\JpgConvertOptions());
        $convertSettings->setOutputPath("converted");
        
        $request = new Requests\ConvertDocumentRequest($convertSettings);
        
        $result = self::$convertApi->convertDocument($request);

        $this->assertTrue(sizeof($result) > 0);
    }

    /**
     * Converts source document to specified type
     *
     */
    public function testConvertDocumentDownload() {
        $convertSettings = new Model\ConvertSettings();
        $convertSettings->setFilePath(Internal\TestFiles::getFileOnePageDocx()->getPath());
        $convertSettings->setFormat("pdf");
        $convertSettings->setConvertOptions(new Model\PdfConvertOptions());
        
        $request = new Requests\ConvertDocumentRequest($convertSettings);
        
        $result = self::$convertApi->convertDocumentDownload($request);

        $size = $result->getSize();
        $this->assertGreaterThan(0, $size);
    }

    /**
     * Converts source document to specified type without storage
     *
     */
    public function testConvertDocumentDirect() {

        $format ="pdf";
        $path = self::getTestFilePath(Internal\TestFiles::getFileFourPagesDocx());

        $request = new Requests\ConvertDocumentDirectRequest($format, $path);
        
        $result = self::$convertApi->ConvertDocumentDirect($request);

        $size = $result->getSize();
        $this->assertGreaterThan(0, $size);
    } 
    
    /**
     * Converts source document to specified type without storage
     * using options
     */
    public function testConvertDocumentDirectOptions() {

        $format ="pdf";
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        $path = self::getTestFilePath($testFile);

        $loadOptions = new Model\WordProcessingLoadOptions();
        $loadOptions->setFormat("docx");
        $loadOptions->setPassword($testFile->password);

        $request = new Requests\ConvertDocumentDirectRequest($format, $path, null, null, $loadOptions);
        
        $result = self::$convertApi->ConvertDocumentDirect($request);

        $size = $result->getSize();
        $this->assertGreaterThan(0, $size);
    }     
}
