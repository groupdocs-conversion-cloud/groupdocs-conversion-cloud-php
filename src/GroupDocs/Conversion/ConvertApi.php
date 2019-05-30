<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ConvertApi.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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

namespace GroupDocs\Conversion;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GroupDocs\Conversion\Model\Requests;

/*
 * GroupDocs.Conversion Cloud API Reference
 */
class ConvertApi
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;
  
    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Stores access token
     * @var accessToken Access token
     */
    protected $accessToken;

    /*
     * Initialize a new instance of ConvertApi
     * @param Configuration   $config configuration info
     * @param ClientInterface   $client client for calling api
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(Configuration $config = null, ClientInterface $client = null, HeaderSelector $selector = null)
    {
        $this->config = $config ?: new Configuration();
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /*
     * Gets the config
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->config;
    }

    /*
     * Operation convertDocument
     *
     * Converts specified input document to format specified in the convertSettings with specified options
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\StoredConvertedResult[]
     */
    public function convertDocument(Requests\convertDocumentRequest $request)
    {
        list($response) = $this->convertDocumentWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation convertDocumentWithHttpInfo
     *
     * Converts specified input document to format specified in the convertSettings with specified options
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\StoredConvertedResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function convertDocumentWithHttpInfo(Requests\convertDocumentRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\StoredConvertedResult[]';
        $request = $this->convertDocumentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->Error != null && $error->Error->Message != null
                    ? $error->Error->Message
                    : $e->getMessage();
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\StoredConvertedResult[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertDocumentAsync
     *
     * Converts specified input document to format specified in the convertSettings with specified options
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertDocumentAsync(Requests\convertDocumentRequest $request) 
    {
        return $this->convertDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertDocumentAsyncWithHttpInfo
     *
     * Converts specified input document to format specified in the convertSettings with specified options
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertDocumentAsyncWithHttpInfo(Requests\convertDocumentRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\StoredConvertedResult[]';
        $request = $this->convertDocumentRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertDocument'
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function convertDocumentRequest(Requests\convertDocumentRequest $request)
    {
        // verify the required parameter 'convertSettings' is set
        if ($request->convertSettings === null) {
            throw new \InvalidArgumentException('Missing the required parameter $convertSettings when calling convertDocument');
        }

        $resourcePath = '/conversion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->convertSettings)) {
            if (is_string($request->convertSettings)) {
                $_tempBody = "\"" . $request->convertSettings . "\"";   
            } else {
                $_tempBody = $request->convertSettings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    
    /*
     * Operation convertDocumentDownload
     *
     * Converts specified input document to format specified in the convertSettings with specified options and download
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\StoredConvertedResult[]
     */
    public function convertDocumentDownload(Requests\convertDocumentRequest $request)
    {
        list($response) = $this->convertDocumentDownloadWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation convertDocumentWithHttpInfo
     *
     * Converts specified input document to format specified in the convertSettings with specified options
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\StoredConvertedResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function convertDocumentDownloadWithHttpInfo(Requests\convertDocumentRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->convertDocumentDownloadRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->Error != null && $error->Error->Message != null
                    ? $error->Error->Message
                    : $e->getMessage();
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertDocumentDownloadAsync
     *
     * Converts specified input document to format specified in the convertSettings with specified options and download
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertDocumentDownloadAsync(Requests\convertDocumentRequest $request) 
    {
        return $this->convertDocumentDownloadAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertDocumentDownloadAsyncWithHttpInfo
     *
     * Converts specified input document to format specified in the convertSettings with specified options and download
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertDocumentDownloadAsyncWithHttpInfo(Requests\convertDocumentRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->convertDocumentDownloadRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertDocumentDownload'
     *
     * @param Requests\convertDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function convertDocumentDownloadRequest(Requests\convertDocumentRequest $request)
    {
        // verify the required parameter 'convertSettings' is set
        if ($request->convertSettings === null) {
            throw new \InvalidArgumentException('Missing the required parameter $convertSettings when calling convertDocument');
        }

        $resourcePath = '/conversion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->convertSettings)) {
            if (is_string($request->convertSettings)) {
                $_tempBody = "\"" . $request->convertSettings . "\"";   
            } else {
                $_tempBody = $request->convertSettings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }    

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption() 
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = true;
        }

        return $options;
    }
    
    /*
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            if(is_array($value))
            {
                $logInfo .= $name . ': ';
                foreach ($value as $val)
                    $logInfo .= $val . "; ";
                $logInfo .= "\n";
            }
            else
                $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
     * Executes url parsing
     */
    private function _buildUrl($url, $queryParams) 
    {
        $urlPath = trim($url, '/');
        $urlQuery = http_build_query($queryParams);
 
        $url = $this->config->getServerUrl() . '/' . $urlPath . "?" . $urlQuery;
        
        return $url;
    }
  
    /*
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        if($this->accessToken == null) 
        {
            $requestUrl = $this->config->getApiBaseUrl() . "/connect/token";
            $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
            try {
                $headers = [];
                $headers["Content-Type"] = "application/x-www-form-urlencoded";                
                $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
                $result = json_decode($response->getBody()->getContents(), true);
            
                $this->accessToken = $result["access_token"];                
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->error != null 
                    ? $error->error
                    : $e->getMessage();
                    
                throw new ApiException($errorMessage, $errorCode);
            }
        }
    }
  
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="convertDocumentRequest.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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

namespace GroupDocs\Conversion\Model\Requests;

/*
 * Request model for convertDocument operation.
 */
class convertDocumentRequest
{
    /*
     * Initializes a new instance of the convertDocumentRequest class.
     *  
     * @param \GroupDocs\Conversion\Model\ConvertSettings $convertSettings 
     */
    public function __construct($convertSettings)             
    {
        $this->convertSettings = $convertSettings;
    }

    /*
     * Gets or sets convertSettings
     */
    public $convertSettings;
}
