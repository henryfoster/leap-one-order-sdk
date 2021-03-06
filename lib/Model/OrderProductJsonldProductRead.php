<?php
/**
 * OrderProductJsonldProductRead
 *
 * PHP version 5
 *
 * @category Class
 * @package  VentureLeap\OrderService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Order API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VentureLeap\OrderService\Model;

use \ArrayAccess;
use \VentureLeap\OrderService\ObjectSerializer;

/**
 * OrderProductJsonldProductRead Class Doc Comment
 *
 * @category Class
 * @package  VentureLeap\OrderService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderProductJsonldProductRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderProduct:jsonld-product:read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'uuid' => 'string',
'application_id' => 'string',
'order' => 'string',
'product_id' => 'string',
'name' => 'string',
'uom' => 'string',
'quantity' => 'float',
'single_net_amount' => 'float',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'active' => 'bool',
'deleted' => 'bool',
'additional_properties' => 'string[]',
'single_vat_amount' => 'float',
'single_gross_amount' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'uuid' => 'uuid',
'application_id' => null,
'order' => 'iri-reference',
'product_id' => 'uuid',
'name' => null,
'uom' => null,
'quantity' => null,
'single_net_amount' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'active' => null,
'deleted' => null,
'additional_properties' => null,
'single_vat_amount' => null,
'single_gross_amount' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'uuid' => 'uuid',
'application_id' => 'applicationId',
'order' => 'order',
'product_id' => 'productId',
'name' => 'name',
'uom' => 'uom',
'quantity' => 'quantity',
'single_net_amount' => 'singleNetAmount',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'active' => 'active',
'deleted' => 'deleted',
'additional_properties' => 'additionalProperties',
'single_vat_amount' => 'singleVatAmount',
'single_gross_amount' => 'singleGrossAmount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'uuid' => 'setUuid',
'application_id' => 'setApplicationId',
'order' => 'setOrder',
'product_id' => 'setProductId',
'name' => 'setName',
'uom' => 'setUom',
'quantity' => 'setQuantity',
'single_net_amount' => 'setSingleNetAmount',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'active' => 'setActive',
'deleted' => 'setDeleted',
'additional_properties' => 'setAdditionalProperties',
'single_vat_amount' => 'setSingleVatAmount',
'single_gross_amount' => 'setSingleGrossAmount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'uuid' => 'getUuid',
'application_id' => 'getApplicationId',
'order' => 'getOrder',
'product_id' => 'getProductId',
'name' => 'getName',
'uom' => 'getUom',
'quantity' => 'getQuantity',
'single_net_amount' => 'getSingleNetAmount',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'active' => 'getActive',
'deleted' => 'getDeleted',
'additional_properties' => 'getAdditionalProperties',
'single_vat_amount' => 'getSingleVatAmount',
'single_gross_amount' => 'getSingleGrossAmount'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['single_net_amount'] = isset($data['single_net_amount']) ? $data['single_net_amount'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['single_vat_amount'] = isset($data['single_vat_amount']) ? $data['single_vat_amount'] : null;
        $this->container['single_gross_amount'] = isset($data['single_gross_amount']) ? $data['single_gross_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['single_net_amount'] === null) {
            $invalidProperties[] = "'single_net_amount' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
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

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string $application_id application_id
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order The corresponding order for this product as Iri
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id UUID from the product service
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the product
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom Unit of Measurement (UOM) Codes
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity example 10 (pieces) or 1,5 (liters)
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets single_net_amount
     *
     * @return float
     */
    public function getSingleNetAmount()
    {
        return $this->container['single_net_amount'];
    }

    /**
     * Sets single_net_amount
     *
     * @param float $single_net_amount single_net_amount
     *
     * @return $this
     */
    public function setSingleNetAmount($single_net_amount)
    {
        $this->container['single_net_amount'] = $single_net_amount;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets additional_properties
     *
     * @return string[]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param string[] $additional_properties additional_properties
     *
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets single_vat_amount
     *
     * @return float
     */
    public function getSingleVatAmount()
    {
        return $this->container['single_vat_amount'];
    }

    /**
     * Sets single_vat_amount
     *
     * @param float $single_vat_amount single_vat_amount
     *
     * @return $this
     */
    public function setSingleVatAmount($single_vat_amount)
    {
        $this->container['single_vat_amount'] = $single_vat_amount;

        return $this;
    }

    /**
     * Gets single_gross_amount
     *
     * @return float
     */
    public function getSingleGrossAmount()
    {
        return $this->container['single_gross_amount'];
    }

    /**
     * Sets single_gross_amount
     *
     * @param float $single_gross_amount single_gross_amount
     *
     * @return $this
     */
    public function setSingleGrossAmount($single_gross_amount)
    {
        $this->container['single_gross_amount'] = $single_gross_amount;

        return $this;
    }
    /**
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

    /**
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

    /**
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

    /**
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

    /**
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
