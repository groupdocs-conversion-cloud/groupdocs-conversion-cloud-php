<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="FormatsApiTest.php">
*   Copyright (c) 2003-2018 Aspose Pty Ltd
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

use GroupDocs\Conversion\Model\Requests;

require_once "BaseApiTest.php";
require_once "Internal\TestFiles.php";

class FormatsApiTest extends BaseApiTest
{
    /**
     * Test case get all possible conversions
     */
    public function testGetAllPossibleConversions()
    {
        $request = new Requests\GetAllPossibleConversionsRequest();
        
        $response = self::$conversionApi->getAllPossibleConversions($request);
        
        $conversions = $response->getConversions();

        $this->assertNotEmpty($conversions);

        $this->assertTrue(count($conversions) > 0);

        foreach ($conversions as $key => $conversion) {
            $this->assertNotEmpty($conversion->getSourceFileType());
            $this->assertNotEmpty($conversion->getPossibleConversions());
        }
    }

    /**
    * Test GetSupportedFileFormatsForSpecificFileType
    */
    public function testGetSupportedFileFormatsForSpecificFileType()
    {
        $request = new Requests\GetPossibleConversionsForFileTypeRequest("docx");
        
        $response = self::$conversionApi->getPossibleConversionsForFileType($request);
        
        $conversions = $response->getPossibleConversions();

        $this->assertTrue(count($conversions) > 0);
        $this->assertEquals("docx", $response->getSourceFileType());
        foreach ($conversions as $key => $conversion)
        {
            $this->assertNotEmpty($conversion);
        }
    }

    /*
    * Test PossibleConversionsForDocument
    */
    // public function testPossibleConversionsForDocument()
    // {
    //     $testFile = Internal\TestFiles::getFileOnePageDocx();
    //     
    //     $file = self::getTestFilePath($testFile);
    //     
    //     $request = new Requests\PossibleConversionsForDocumentRequest($file);
    //     
    //     $response = self::$conversionApi->possibleConversionsForDocument($request);
    //     
    //     $conversions = $response->getPossibleConversions();
    //     
    //     $this->assertTrue(count($conversions) > 0);
    //     $this->assertEquals("stream", $response->getSourceFileType());
    //     foreach ($conversions as $key => $conversion)
    //     {
    //         $this->assertNotEmpty($conversion);
    //     }
    // }
}
