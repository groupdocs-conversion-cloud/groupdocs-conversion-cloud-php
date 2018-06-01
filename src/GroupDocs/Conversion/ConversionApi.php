<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ConversionApi.php">
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

namespace GroupDocs\Conversion;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GroupDocs\Conversion\Model\Requests;

/*
 * GroupDocs.Conversion for Cloud API References
 */
class ConversionApi
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
     * Initialize a new instance of ConversionApi
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
     * Operation convertToCells
     *
     * Returns CELLS document, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\Link
     */
    public function convertToCells(Requests\ConvertToCellsRequest $request)
    {
        try {
             list($response) = $this->convertToCellsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToCellsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToCellsWithHttpInfo
     *
     * Returns CELLS document, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\Link, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToCellsWithHttpInfo(Requests\ConvertToCellsRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToCellsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\Link', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertToCellsAsync
     *
     * Returns CELLS document, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToCellsAsync(Requests\ConvertToCellsRequest $request) 
    {
        return $this->convertToCellsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToCellsAsyncWithHttpInfo
     *
     * Returns CELLS document, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToCellsAsyncWithHttpInfo(Requests\ConvertToCellsRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToCellsRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToCells'
     *
     * @param Requests\ConvertToCellsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToCellsRequest(Requests\ConvertToCellsRequest $request)
    {

        $resourcePath = '/conversion/cells';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->outPath !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($request->outPath) ? ($request->outPath ? 'true' : 'false') : $request->outPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToCellsStream
     *
     * Returns CELLS stream, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function convertToCellsStream(Requests\ConvertToCellsStreamRequest $request)
    {
        try {
             list($response) = $this->convertToCellsStreamWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToCellsStreamWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToCellsStreamWithHttpInfo
     *
     * Returns CELLS stream, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToCellsStreamWithHttpInfo(Requests\ConvertToCellsStreamRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToCellsStreamRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
     * Operation convertToCellsStreamAsync
     *
     * Returns CELLS stream, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToCellsStreamAsync(Requests\ConvertToCellsStreamRequest $request) 
    {
        return $this->convertToCellsStreamAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToCellsStreamAsyncWithHttpInfo
     *
     * Returns CELLS stream, result of conversion of the source file, specified by the provided CellsConversionSettings
     *
     * @param Requests\ConvertToCellsStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToCellsStreamAsyncWithHttpInfo(Requests\ConvertToCellsStreamRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToCellsStreamRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToCellsStream'
     *
     * @param Requests\ConvertToCellsStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToCellsStreamRequest(Requests\ConvertToCellsStreamRequest $request)
    {

        $resourcePath = '/conversion/cells/stream';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToHtml
     *
     * Returns HTML document, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\Link
     */
    public function convertToHtml(Requests\ConvertToHtmlRequest $request)
    {
        try {
             list($response) = $this->convertToHtmlWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToHtmlWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToHtmlWithHttpInfo
     *
     * Returns HTML document, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\Link, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToHtmlWithHttpInfo(Requests\ConvertToHtmlRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToHtmlRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\Link', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertToHtmlAsync
     *
     * Returns HTML document, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToHtmlAsync(Requests\ConvertToHtmlRequest $request) 
    {
        return $this->convertToHtmlAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToHtmlAsyncWithHttpInfo
     *
     * Returns HTML document, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToHtmlAsyncWithHttpInfo(Requests\ConvertToHtmlRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToHtmlRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToHtml'
     *
     * @param Requests\ConvertToHtmlRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToHtmlRequest(Requests\ConvertToHtmlRequest $request)
    {

        $resourcePath = '/conversion/html';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->outPath !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($request->outPath) ? ($request->outPath ? 'true' : 'false') : $request->outPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToHtmlStream
     *
     * Returns HTML stream, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function convertToHtmlStream(Requests\ConvertToHtmlStreamRequest $request)
    {
        try {
             list($response) = $this->convertToHtmlStreamWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToHtmlStreamWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToHtmlStreamWithHttpInfo
     *
     * Returns HTML stream, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToHtmlStreamWithHttpInfo(Requests\ConvertToHtmlStreamRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToHtmlStreamRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
     * Operation convertToHtmlStreamAsync
     *
     * Returns HTML stream, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToHtmlStreamAsync(Requests\ConvertToHtmlStreamRequest $request) 
    {
        return $this->convertToHtmlStreamAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToHtmlStreamAsyncWithHttpInfo
     *
     * Returns HTML stream, result of conversion of the source file, specified by the provided HtmlConversionSettings
     *
     * @param Requests\ConvertToHtmlStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToHtmlStreamAsyncWithHttpInfo(Requests\ConvertToHtmlStreamRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToHtmlStreamRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToHtmlStream'
     *
     * @param Requests\ConvertToHtmlStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToHtmlStreamRequest(Requests\ConvertToHtmlStreamRequest $request)
    {

        $resourcePath = '/conversion/html/stream';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToImage
     *
     * Returns IMAGE document, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\Link
     */
    public function convertToImage(Requests\ConvertToImageRequest $request)
    {
        try {
             list($response) = $this->convertToImageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToImageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToImageWithHttpInfo
     *
     * Returns IMAGE document, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\Link, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToImageWithHttpInfo(Requests\ConvertToImageRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToImageRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\Link', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertToImageAsync
     *
     * Returns IMAGE document, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToImageAsync(Requests\ConvertToImageRequest $request) 
    {
        return $this->convertToImageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToImageAsyncWithHttpInfo
     *
     * Returns IMAGE document, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToImageAsyncWithHttpInfo(Requests\ConvertToImageRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToImageRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToImage'
     *
     * @param Requests\ConvertToImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToImageRequest(Requests\ConvertToImageRequest $request)
    {

        $resourcePath = '/conversion/image';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->outPath !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($request->outPath) ? ($request->outPath ? 'true' : 'false') : $request->outPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToImageStream
     *
     * Returns IMAGE stream, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function convertToImageStream(Requests\ConvertToImageStreamRequest $request)
    {
        try {
             list($response) = $this->convertToImageStreamWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToImageStreamWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToImageStreamWithHttpInfo
     *
     * Returns IMAGE stream, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToImageStreamWithHttpInfo(Requests\ConvertToImageStreamRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToImageStreamRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
     * Operation convertToImageStreamAsync
     *
     * Returns IMAGE stream, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToImageStreamAsync(Requests\ConvertToImageStreamRequest $request) 
    {
        return $this->convertToImageStreamAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToImageStreamAsyncWithHttpInfo
     *
     * Returns IMAGE stream, result of conversion of the source file, specified by the provided ImageConversionSettings
     *
     * @param Requests\ConvertToImageStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToImageStreamAsyncWithHttpInfo(Requests\ConvertToImageStreamRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToImageStreamRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToImageStream'
     *
     * @param Requests\ConvertToImageStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToImageStreamRequest(Requests\ConvertToImageStreamRequest $request)
    {

        $resourcePath = '/conversion/image/stream';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToPdf
     *
     * Returns PDF document, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\Link
     */
    public function convertToPdf(Requests\ConvertToPdfRequest $request)
    {
        try {
             list($response) = $this->convertToPdfWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToPdfWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToPdfWithHttpInfo
     *
     * Returns PDF document, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\Link, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToPdfWithHttpInfo(Requests\ConvertToPdfRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToPdfRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\Link', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertToPdfAsync
     *
     * Returns PDF document, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToPdfAsync(Requests\ConvertToPdfRequest $request) 
    {
        return $this->convertToPdfAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToPdfAsyncWithHttpInfo
     *
     * Returns PDF document, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToPdfAsyncWithHttpInfo(Requests\ConvertToPdfRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToPdfRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToPdf'
     *
     * @param Requests\ConvertToPdfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToPdfRequest(Requests\ConvertToPdfRequest $request)
    {

        $resourcePath = '/conversion/pdf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->outPath !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($request->outPath) ? ($request->outPath ? 'true' : 'false') : $request->outPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToPdfStream
     *
     * Returns PDF stream, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function convertToPdfStream(Requests\ConvertToPdfStreamRequest $request)
    {
        try {
             list($response) = $this->convertToPdfStreamWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToPdfStreamWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToPdfStreamWithHttpInfo
     *
     * Returns PDF stream, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToPdfStreamWithHttpInfo(Requests\ConvertToPdfStreamRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToPdfStreamRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
     * Operation convertToPdfStreamAsync
     *
     * Returns PDF stream, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToPdfStreamAsync(Requests\ConvertToPdfStreamRequest $request) 
    {
        return $this->convertToPdfStreamAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToPdfStreamAsyncWithHttpInfo
     *
     * Returns PDF stream, result of conversion of the source file, specified by the provided PdfConversionSettings
     *
     * @param Requests\ConvertToPdfStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToPdfStreamAsyncWithHttpInfo(Requests\ConvertToPdfStreamRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToPdfStreamRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToPdfStream'
     *
     * @param Requests\ConvertToPdfStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToPdfStreamRequest(Requests\ConvertToPdfStreamRequest $request)
    {

        $resourcePath = '/conversion/pdf/stream';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToSlides
     *
     * Returns SLIDES document, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\Link
     */
    public function convertToSlides(Requests\ConvertToSlidesRequest $request)
    {
        try {
             list($response) = $this->convertToSlidesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToSlidesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToSlidesWithHttpInfo
     *
     * Returns SLIDES document, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\Link, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToSlidesWithHttpInfo(Requests\ConvertToSlidesRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToSlidesRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\Link', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertToSlidesAsync
     *
     * Returns SLIDES document, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToSlidesAsync(Requests\ConvertToSlidesRequest $request) 
    {
        return $this->convertToSlidesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToSlidesAsyncWithHttpInfo
     *
     * Returns SLIDES document, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToSlidesAsyncWithHttpInfo(Requests\ConvertToSlidesRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToSlidesRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToSlides'
     *
     * @param Requests\ConvertToSlidesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToSlidesRequest(Requests\ConvertToSlidesRequest $request)
    {

        $resourcePath = '/conversion/slides';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->outPath !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($request->outPath) ? ($request->outPath ? 'true' : 'false') : $request->outPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToSlidesStream
     *
     * Returns SLIDES stream, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function convertToSlidesStream(Requests\ConvertToSlidesStreamRequest $request)
    {
        try {
             list($response) = $this->convertToSlidesStreamWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToSlidesStreamWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToSlidesStreamWithHttpInfo
     *
     * Returns SLIDES stream, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToSlidesStreamWithHttpInfo(Requests\ConvertToSlidesStreamRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToSlidesStreamRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
     * Operation convertToSlidesStreamAsync
     *
     * Returns SLIDES stream, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToSlidesStreamAsync(Requests\ConvertToSlidesStreamRequest $request) 
    {
        return $this->convertToSlidesStreamAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToSlidesStreamAsyncWithHttpInfo
     *
     * Returns SLIDES stream, result of conversion of the source file, specified by the provided SlidesConversionSettings
     *
     * @param Requests\ConvertToSlidesStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToSlidesStreamAsyncWithHttpInfo(Requests\ConvertToSlidesStreamRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToSlidesStreamRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToSlidesStream'
     *
     * @param Requests\ConvertToSlidesStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToSlidesStreamRequest(Requests\ConvertToSlidesStreamRequest $request)
    {

        $resourcePath = '/conversion/slides/stream';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToWords
     *
     * Returns WORDS document, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\Link
     */
    public function convertToWords(Requests\ConvertToWordsRequest $request)
    {
        try {
             list($response) = $this->convertToWordsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToWordsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToWordsWithHttpInfo
     *
     * Returns WORDS document, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\Link, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToWordsWithHttpInfo(Requests\ConvertToWordsRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToWordsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\Link', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation convertToWordsAsync
     *
     * Returns WORDS document, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToWordsAsync(Requests\ConvertToWordsRequest $request) 
    {
        return $this->convertToWordsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToWordsAsyncWithHttpInfo
     *
     * Returns WORDS document, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToWordsAsyncWithHttpInfo(Requests\ConvertToWordsRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->ConvertToWordsRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToWords'
     *
     * @param Requests\ConvertToWordsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToWordsRequest(Requests\ConvertToWordsRequest $request)
    {

        $resourcePath = '/conversion/words';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->outPath !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($request->outPath) ? ($request->outPath ? 'true' : 'false') : $request->outPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation convertToWordsStream
     *
     * Returns WORDS stream, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function convertToWordsStream(Requests\ConvertToWordsStreamRequest $request)
    {
        try {
             list($response) = $this->convertToWordsStreamWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->convertToWordsStreamWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation convertToWordsStreamWithHttpInfo
     *
     * Returns WORDS stream, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertToWordsStreamWithHttpInfo(Requests\ConvertToWordsStreamRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToWordsStreamRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
     * Operation convertToWordsStreamAsync
     *
     * Returns WORDS stream, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToWordsStreamAsync(Requests\ConvertToWordsStreamRequest $request) 
    {
        return $this->convertToWordsStreamAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation convertToWordsStreamAsyncWithHttpInfo
     *
     * Returns WORDS stream, result of conversion of the source file, specified by the provided WordsConversionSettings
     *
     * @param Requests\ConvertToWordsStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertToWordsStreamAsyncWithHttpInfo(Requests\ConvertToWordsStreamRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->ConvertToWordsStreamRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'convertToWordsStream'
     *
     * @param Requests\ConvertToWordsStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ConvertToWordsStreamRequest(Requests\ConvertToWordsStreamRequest $request)
    {

        $resourcePath = '/conversion/words/stream';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getAllPossibleConversions
     *
     * Retrieves all possible conversions
     *
     * @param Requests\GetAllPossibleConversionsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\AllPossibleConversionsResponse
     */
    public function getAllPossibleConversions(Requests\GetAllPossibleConversionsRequest $request)
    {
        try {
             list($response) = $this->getAllPossibleConversionsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getAllPossibleConversionsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getAllPossibleConversionsWithHttpInfo
     *
     * Retrieves all possible conversions
     *
     * @param Requests\GetAllPossibleConversionsRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\AllPossibleConversionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPossibleConversionsWithHttpInfo(Requests\GetAllPossibleConversionsRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\AllPossibleConversionsResponse';
        $request = $this->GetAllPossibleConversionsRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\AllPossibleConversionsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getAllPossibleConversionsAsync
     *
     * Retrieves all possible conversions
     *
     * @param Requests\GetAllPossibleConversionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPossibleConversionsAsync(Requests\GetAllPossibleConversionsRequest $request) 
    {
        return $this->getAllPossibleConversionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getAllPossibleConversionsAsyncWithHttpInfo
     *
     * Retrieves all possible conversions
     *
     * @param Requests\GetAllPossibleConversionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPossibleConversionsAsyncWithHttpInfo(Requests\GetAllPossibleConversionsRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\AllPossibleConversionsResponse';
        $request = $this->GetAllPossibleConversionsRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getAllPossibleConversions'
     *
     * @param Requests\GetAllPossibleConversionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetAllPossibleConversionsRequest(Requests\GetAllPossibleConversionsRequest $request)
    {

        $resourcePath = '/conversion/formats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation getPossibleConversionsForFileType
     *
     * Retrieves all possible conversions for the specified file type
     *
     * @param Requests\GetPossibleConversionsForFileTypeRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\PossibleConversionResponse
     */
    public function getPossibleConversionsForFileType(Requests\GetPossibleConversionsForFileTypeRequest $request)
    {
        try {
             list($response) = $this->getPossibleConversionsForFileTypeWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getPossibleConversionsForFileTypeWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getPossibleConversionsForFileTypeWithHttpInfo
     *
     * Retrieves all possible conversions for the specified file type
     *
     * @param Requests\GetPossibleConversionsForFileTypeRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\PossibleConversionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPossibleConversionsForFileTypeWithHttpInfo(Requests\GetPossibleConversionsForFileTypeRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\PossibleConversionResponse';
        $request = $this->GetPossibleConversionsForFileTypeRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\PossibleConversionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getPossibleConversionsForFileTypeAsync
     *
     * Retrieves all possible conversions for the specified file type
     *
     * @param Requests\GetPossibleConversionsForFileTypeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPossibleConversionsForFileTypeAsync(Requests\GetPossibleConversionsForFileTypeRequest $request) 
    {
        return $this->getPossibleConversionsForFileTypeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getPossibleConversionsForFileTypeAsyncWithHttpInfo
     *
     * Retrieves all possible conversions for the specified file type
     *
     * @param Requests\GetPossibleConversionsForFileTypeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPossibleConversionsForFileTypeAsyncWithHttpInfo(Requests\GetPossibleConversionsForFileTypeRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\PossibleConversionResponse';
        $request = $this->GetPossibleConversionsForFileTypeRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'getPossibleConversionsForFileType'
     *
     * @param Requests\GetPossibleConversionsForFileTypeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetPossibleConversionsForFileTypeRequest(Requests\GetPossibleConversionsForFileTypeRequest $request)
    {
        // verify the required parameter 'extension' is set
        if ($request->extension === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension when calling getPossibleConversionsForFileType');
        }

        $resourcePath = '/conversion/{extension}/formats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->extension !== null) {
            $localName = lcfirst('Extension');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->extension), $resourcePath);
        }

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation possibleConversionsForDocument
     *
     * Retrieves all possible conversions for the specified document type. Document is passed in request body
     *
     * @param Requests\PossibleConversionsForDocumentRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\PossibleConversionResponse
     */
    public function possibleConversionsForDocument(Requests\PossibleConversionsForDocumentRequest $request)
    {
        try {
             list($response) = $this->possibleConversionsForDocumentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->possibleConversionsForDocumentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation possibleConversionsForDocumentWithHttpInfo
     *
     * Retrieves all possible conversions for the specified document type. Document is passed in request body
     *
     * @param Requests\PossibleConversionsForDocumentRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\PossibleConversionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function possibleConversionsForDocumentWithHttpInfo(Requests\PossibleConversionsForDocumentRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\PossibleConversionResponse';
        $request = $this->PossibleConversionsForDocumentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\PossibleConversionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation possibleConversionsForDocumentAsync
     *
     * Retrieves all possible conversions for the specified document type. Document is passed in request body
     *
     * @param Requests\PossibleConversionsForDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function possibleConversionsForDocumentAsync(Requests\PossibleConversionsForDocumentRequest $request) 
    {
        return $this->possibleConversionsForDocumentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation possibleConversionsForDocumentAsyncWithHttpInfo
     *
     * Retrieves all possible conversions for the specified document type. Document is passed in request body
     *
     * @param Requests\PossibleConversionsForDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function possibleConversionsForDocumentAsyncWithHttpInfo(Requests\PossibleConversionsForDocumentRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\PossibleConversionResponse';
        $request = $this->PossibleConversionsForDocumentRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'possibleConversionsForDocument'
     *
     * @param Requests\PossibleConversionsForDocumentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PossibleConversionsForDocumentRequest(Requests\PossibleConversionsForDocumentRequest $request)
    {
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling possibleConversionsForDocument');
        }

        $resourcePath = '/conversion/formats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // form params
        if ($request->file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($request->file);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['file'] = $contents;
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['multipart/form-data']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation quickConvert
     *
     * Returns document, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Conversion\Model\Link
     */
    public function quickConvert(Requests\QuickConvertRequest $request)
    {
        try {
             list($response) = $this->quickConvertWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->quickConvertWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation quickConvertWithHttpInfo
     *
     * Returns document, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Conversion\Model\Link, HTTP status code, HTTP response headers (array of strings)
     */
    public function quickConvertWithHttpInfo(Requests\QuickConvertRequest $request)
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->QuickConvertRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Conversion\Model\Link', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation quickConvertAsync
     *
     * Returns document, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quickConvertAsync(Requests\QuickConvertRequest $request) 
    {
        return $this->quickConvertAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation quickConvertAsyncWithHttpInfo
     *
     * Returns document, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quickConvertAsyncWithHttpInfo(Requests\QuickConvertRequest $request) 
    {
        $returnType = '\GroupDocs\Conversion\Model\Link';
        $request = $this->QuickConvertRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'quickConvert'
     *
     * @param Requests\QuickConvertRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function QuickConvertRequest(Requests\QuickConvertRequest $request)
    {

        $resourcePath = '/conversion/quick';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->outPath !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($request->outPath) ? ($request->outPath ? 'true' : 'false') : $request->outPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation quickConvertToStream
     *
     * Returns stream, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertToStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function quickConvertToStream(Requests\QuickConvertToStreamRequest $request)
    {
        try {
             list($response) = $this->quickConvertToStreamWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->quickConvertToStreamWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation quickConvertToStreamWithHttpInfo
     *
     * Returns stream, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertToStreamRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Conversion\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function quickConvertToStreamWithHttpInfo(Requests\QuickConvertToStreamRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->QuickConvertToStreamRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_refreshToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
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
     * Operation quickConvertToStreamAsync
     *
     * Returns stream, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertToStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quickConvertToStreamAsync(Requests\QuickConvertToStreamRequest $request) 
    {
        return $this->quickConvertToStreamAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation quickConvertToStreamAsyncWithHttpInfo
     *
     * Returns stream, result of conversion of the source file, specified by the provided QuickConversionSettings
     *
     * @param Requests\QuickConvertToStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quickConvertToStreamAsyncWithHttpInfo(Requests\QuickConvertToStreamRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->QuickConvertToStreamRequest($request);

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
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_refreshToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /*
     * Create request for operation 'quickConvertToStream'
     *
     * @param Requests\QuickConvertToStreamRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function QuickConvertToStreamRequest(Requests\QuickConvertToStreamRequest $request)
    {

        $resourcePath = '/conversion/quick/stream';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->settings)) {
            if (is_string($request->settings)) {
                $_tempBody = "\"" . $request->settings . "\"";   
            } else {
                $_tempBody = $request->settings;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/json', 'application/xml']
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

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
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
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
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
            $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
     * Executes url parsing
     */
    private function _parseURL($url, $queryParams) 
    {
        // parse the url
        $urlPath = trim($url, '/');
        $urlQuery = http_build_query($queryParams);
 
        $urlToSign = $this->config->getBasePath() . '/' . $urlPath . "?" . $urlQuery;
        
        return $urlToSign;
    }
  
    /*
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        $requestUrl = $this->config->getHost() . "/oauth2/token";
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
        $response = $this->client->send(new Request('POST', $requestUrl, [], $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
        $this->config->setRefreshToken($result["refresh_token"]);
    }
  
    /*
     * Refresh token
     */
    private function _refreshToken() 
    {
        $requestUrl = $this->config->getHost() . "/oauth2/token";
        $postData = "grant_type=refresh_token&refresh_token=" . $this->config->getRefreshToken();
        $response = $this->client->send(new Request('POST', $requestUrl, [], $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
        $this->config->setRefreshToken($result["refresh_token"]);
    }
}
