<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="OperationResult.php">
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

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * OperationResult
 *
 * @description Operation status result
 */
class OperationResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OperationResult";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'string',
        'method' => 'string',
        'status' => 'string',
        'created' => '\DateTime',
        'started' => '\DateTime',
        'failed' => '\DateTime',
        'canceled' => '\DateTime',
        'finished' => '\DateTime',
        'result' => '\GroupDocs\Conversion\Model\StoredConvertedResult[]',
        'error' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'method' => null,
        'status' => null,
        'created' => 'date-time',
        'started' => 'date-time',
        'failed' => 'date-time',
        'canceled' => 'date-time',
        'finished' => 'date-time',
        'result' => null,
        'error' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'method' => 'Method',
        'status' => 'Status',
        'created' => 'Created',
        'started' => 'Started',
        'failed' => 'Failed',
        'canceled' => 'Canceled',
        'finished' => 'Finished',
        'result' => 'Result',
        'error' => 'Error'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'method' => 'setMethod',
        'status' => 'setStatus',
        'created' => 'setCreated',
        'started' => 'setStarted',
        'failed' => 'setFailed',
        'canceled' => 'setCanceled',
        'finished' => 'setFinished',
        'result' => 'setResult',
        'error' => 'setError'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'method' => 'getMethod',
        'status' => 'getStatus',
        'created' => 'getCreated',
        'started' => 'getStarted',
        'failed' => 'getFailed',
        'canceled' => 'getCanceled',
        'finished' => 'getFinished',
        'result' => 'getResult',
        'error' => 'getError'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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

    const METHOD_CONVERT = 'Convert';
    const METHOD_CONVERT_AND_SAVE = 'ConvertAndSave';
    const STATUS_CREATED = 'Created';
    const STATUS_STARTED = 'Started';
    const STATUS_FAILED = 'Failed';
    const STATUS_CANCELED = 'Canceled';
    const STATUS_FINISHED = 'Finished';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_CONVERT,
            self::METHOD_CONVERT_AND_SAVE,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_STARTED,
            self::STATUS_FAILED,
            self::STATUS_CANCELED,
            self::STATUS_FINISHED,
        ];
    }
    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['canceled'] = isset($data['canceled']) ? $data['canceled'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!in_array($this->container['method'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['method'] === null) {
            return false;
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!in_array($this->container['method'], $allowedValues)) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /*
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /*
     * Sets method
     *
     * @param string $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if ((!is_numeric($method) && !in_array($method, $allowedValues)) || (is_numeric($method) && !in_array($allowedValues[$method], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'method', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['method'] = $method;

        return $this;
    }

    /*
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /*
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if ((!is_numeric($status) && !in_array($status, $allowedValues)) || (is_numeric($status) && !in_array($allowedValues[$status], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'status', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['status'] = $status;

        return $this;
    }

    /*
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /*
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /*
     * Gets started
     *
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /*
     * Sets started
     *
     * @param \DateTime $started started
     *
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /*
     * Gets failed
     *
     * @return \DateTime
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /*
     * Sets failed
     *
     * @param \DateTime $failed failed
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /*
     * Gets canceled
     *
     * @return \DateTime
     */
    public function getCanceled()
    {
        return $this->container['canceled'];
    }

    /*
     * Sets canceled
     *
     * @param \DateTime $canceled canceled
     *
     * @return $this
     */
    public function setCanceled($canceled)
    {
        $this->container['canceled'] = $canceled;

        return $this;
    }

    /*
     * Gets finished
     *
     * @return \DateTime
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /*
     * Sets finished
     *
     * @param \DateTime $finished finished
     *
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /*
     * Gets result
     *
     * @return \GroupDocs\Conversion\Model\StoredConvertedResult[]
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /*
     * Sets result
     *
     * @param \GroupDocs\Conversion\Model\StoredConvertedResult[] $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /*
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /*
     * Sets error
     *
     * @param string $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


