<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information needed to restate a conversion's value.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.RestatementValue</code>
 */
class RestatementValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue adjusted_value = 1;</code>
     */
    protected $adjusted_value = null;
    /**
     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code e.g. USD or EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 2;</code>
     */
    protected $currency_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $adjusted_value
     *           The restated conversion value. This is the value of the conversion after
     *           restatement. For example, to change the value of a conversion from 100 to
     *           70, an adjusted value of 70 should be reported.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           The currency of the restated value. If not provided, then the default
     *           currency from the conversion action is used, and if that is not set then
     *           the account currency is used. This is the ISO 4217 3-character currency
     *           code e.g. USD or EUR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue adjusted_value = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getAdjustedValue()
    {
        return $this->adjusted_value;
    }

    /**
     * Returns the unboxed value from <code>getAdjustedValue()</code>

     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue adjusted_value = 1;</code>
     * @return float|null
     */
    public function getAdjustedValueUnwrapped()
    {
        return $this->readWrapperValue("adjusted_value");
    }

    /**
     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue adjusted_value = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setAdjustedValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->adjusted_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue adjusted_value = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setAdjustedValueUnwrapped($var)
    {
        $this->writeWrapperValue("adjusted_value", $var);
        return $this;}

    /**
     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code e.g. USD or EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Returns the unboxed value from <code>getCurrencyCode()</code>

     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code e.g. USD or EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 2;</code>
     * @return string|null
     */
    public function getCurrencyCodeUnwrapped()
    {
        return $this->readWrapperValue("currency_code");
    }

    /**
     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code e.g. USD or EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code e.g. USD or EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeUnwrapped($var)
    {
        $this->writeWrapperValue("currency_code", $var);
        return $this;}

}
