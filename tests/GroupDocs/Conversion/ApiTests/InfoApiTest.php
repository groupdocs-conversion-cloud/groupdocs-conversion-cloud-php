<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="AuthApiTest.php">
*   Copyright (c) 2003-2022 Aspose Pty Ltd
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
use GroupDocs\Conversion\InfoApi;
use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

class InfoApiTest extends BaseApiTest
{
    /**
     * Retrieves list of supported file formats.
     *
     */
    public function testGetSupportedConversionTypes() {
        $request = new Requests\GetSupportedConversionTypesRequest();
        $response = self::$infoApi->getSupportedConversionTypes($request);

        $this->assertTrue(sizeof($response) > 0);
        foreach($response as $key => $format) {
            $this->assertFalse($format->getSourceFormat() == null);
        }
    }

    /**
     * Retrieves document metadata.
     *
     */
    public function testGetDocumentMetadataTypes() {
        $request = new Requests\GetDocumentMetadataRequest(Internal\TestFiles::getFileFourPagesDocx()->getPath());
        $response = self::$infoApi->getDocumentMetadata($request);

        $this->assertTrue(4 == $response->getPageCount());
    }

    /**
     * Check error when file not exist.
     *
     */    
    public function testGetInfoReturnsFileNotFound()
    {
        try 
        {
            $request = new Requests\GetDocumentMetadataRequest(Internal\TestFiles::getFileNotExist()->getPath());
            $response = self::$infoApi->getDocumentMetadata($request);
        }
        catch (\GroupDocs\Conversion\ApiException $ex) 
        {            
            $this->assertTrue(strpos($ex->getMessage(), "AmazonS3 Storage exception: The specified key does not exist.") === 0);
            return;
        }
        $this->fail("ApiException expected");      
    
    }    
}
