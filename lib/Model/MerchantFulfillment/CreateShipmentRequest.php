<?php
/**
 * CreateShipmentRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model\MerchantFulfillment;

use \ArrayAccess;
use \Evers\SellingPartnerApi\ObjectSerializer;
use \Evers\SellingPartnerApi\Model\ModelInterface;

/**
 * CreateShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description Request schema.
 * @package  Evers\SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_request_details' => '\Evers\SellingPartnerApi\Model\MerchantFulfillment\ShipmentRequestDetails',
        'shipping_service_id' => 'string',
        'shipping_service_offer_id' => 'string',
        'hazmat_type' => '\Evers\SellingPartnerApi\Model\MerchantFulfillment\HazmatType',
        'label_format_option' => '\Evers\SellingPartnerApi\Model\MerchantFulfillment\LabelFormatOptionRequest',
        'shipment_level_seller_inputs_list' => '\Evers\SellingPartnerApi\Model\MerchantFulfillment\AdditionalSellerInputs[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_request_details' => null,
        'shipping_service_id' => null,
        'shipping_service_offer_id' => null,
        'hazmat_type' => null,
        'label_format_option' => null,
        'shipment_level_seller_inputs_list' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_request_details' => 'ShipmentRequestDetails',
        'shipping_service_id' => 'ShippingServiceId',
        'shipping_service_offer_id' => 'ShippingServiceOfferId',
        'hazmat_type' => 'HazmatType',
        'label_format_option' => 'LabelFormatOption',
        'shipment_level_seller_inputs_list' => 'ShipmentLevelSellerInputsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_request_details' => 'setShipmentRequestDetails',
        'shipping_service_id' => 'setShippingServiceId',
        'shipping_service_offer_id' => 'setShippingServiceOfferId',
        'hazmat_type' => 'setHazmatType',
        'label_format_option' => 'setLabelFormatOption',
        'shipment_level_seller_inputs_list' => 'setShipmentLevelSellerInputsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_request_details' => 'getShipmentRequestDetails',
        'shipping_service_id' => 'getShippingServiceId',
        'shipping_service_offer_id' => 'getShippingServiceOfferId',
        'hazmat_type' => 'getHazmatType',
        'label_format_option' => 'getLabelFormatOption',
        'shipment_level_seller_inputs_list' => 'getShipmentLevelSellerInputsList'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['shipment_request_details'] = $data['shipment_request_details'] ?? null;
        $this->container['shipping_service_id'] = $data['shipping_service_id'] ?? null;
        $this->container['shipping_service_offer_id'] = $data['shipping_service_offer_id'] ?? null;
        $this->container['hazmat_type'] = $data['hazmat_type'] ?? null;
        $this->container['label_format_option'] = $data['label_format_option'] ?? null;
        $this->container['shipment_level_seller_inputs_list'] = $data['shipment_level_seller_inputs_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_request_details'] === null) {
            $invalidProperties[] = "'shipment_request_details' can't be null";
        }
        if ($this->container['shipping_service_id'] === null) {
            $invalidProperties[] = "'shipping_service_id' can't be null";
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
     * Gets shipment_request_details
     *
     * @return \Evers\SellingPartnerApi\Model\MerchantFulfillment\ShipmentRequestDetails
     */
    public function getShipmentRequestDetails()
    {
        return $this->container['shipment_request_details'];
    }

    /**
     * Sets shipment_request_details
     *
     * @param \Evers\SellingPartnerApi\Model\MerchantFulfillment\ShipmentRequestDetails $shipment_request_details shipment_request_details
     *
     * @return self
     */
    public function setShipmentRequestDetails($shipment_request_details)
    {
        $this->container['shipment_request_details'] = $shipment_request_details;

        return $this;
    }

    /**
     * Gets shipping_service_id
     *
     * @return string
     */
    public function getShippingServiceId()
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id
     *
     * @param string $shipping_service_id An Amazon-defined shipping service identifier.
     *
     * @return self
     */
    public function setShippingServiceId($shipping_service_id)
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }

    /**
     * Gets shipping_service_offer_id
     *
     * @return string|null
     */
    public function getShippingServiceOfferId()
    {
        return $this->container['shipping_service_offer_id'];
    }

    /**
     * Sets shipping_service_offer_id
     *
     * @param string|null $shipping_service_offer_id Identifies a shipping service order made by a carrier.
     *
     * @return self
     */
    public function setShippingServiceOfferId($shipping_service_offer_id)
    {
        $this->container['shipping_service_offer_id'] = $shipping_service_offer_id;

        return $this;
    }

    /**
     * Gets hazmat_type
     *
     * @return \Evers\SellingPartnerApi\Model\MerchantFulfillment\HazmatType|null
     */
    public function getHazmatType()
    {
        return $this->container['hazmat_type'];
    }

    /**
     * Sets hazmat_type
     *
     * @param \Evers\SellingPartnerApi\Model\MerchantFulfillment\HazmatType|null $hazmat_type hazmat_type
     *
     * @return self
     */
    public function setHazmatType($hazmat_type)
    {
        $this->container['hazmat_type'] = $hazmat_type;

        return $this;
    }

    /**
     * Gets label_format_option
     *
     * @return \Evers\SellingPartnerApi\Model\MerchantFulfillment\LabelFormatOptionRequest|null
     */
    public function getLabelFormatOption()
    {
        return $this->container['label_format_option'];
    }

    /**
     * Sets label_format_option
     *
     * @param \Evers\SellingPartnerApi\Model\MerchantFulfillment\LabelFormatOptionRequest|null $label_format_option label_format_option
     *
     * @return self
     */
    public function setLabelFormatOption($label_format_option)
    {
        $this->container['label_format_option'] = $label_format_option;

        return $this;
    }

    /**
     * Gets shipment_level_seller_inputs_list
     *
     * @return \Evers\SellingPartnerApi\Model\MerchantFulfillment\AdditionalSellerInputs[]|null
     */
    public function getShipmentLevelSellerInputsList()
    {
        return $this->container['shipment_level_seller_inputs_list'];
    }

    /**
     * Sets shipment_level_seller_inputs_list
     *
     * @param \Evers\SellingPartnerApi\Model\MerchantFulfillment\AdditionalSellerInputs[]|null $shipment_level_seller_inputs_list A list of additional seller input pairs required to purchase shipping.
     *
     * @return self
     */
    public function setShipmentLevelSellerInputsList($shipment_level_seller_inputs_list)
    {
        $this->container['shipment_level_seller_inputs_list'] = $shipment_level_seller_inputs_list;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


