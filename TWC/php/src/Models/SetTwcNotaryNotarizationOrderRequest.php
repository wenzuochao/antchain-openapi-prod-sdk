<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\TWC\Models;

use AlibabaCloud\Tea\Model;

class SetTwcNotaryNotarizationOrderRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'regionName' => 'region_name',
        'bizCode' => 'biz_code',
        'key' => 'key',
        'orderId' => 'order_id',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->regionName) {
            $res['region_name'] = $this->regionName;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetTwcNotaryNotarizationOrderRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['region_name'])){
            $model->regionName = $map['region_name'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    /**
     * @var string
     */
    public $regionName;

    // 公证事项ID
    /**
     * @var string
     */
    public $bizCode;

    // 需设置的属性名称
    /**
     * @var string
     */
    public $key;

    // 公证订单ID
    /**
     * @var string
     */
    public $orderId;

    // 被设置字段的值
    /**
     * @var string
     */
    public $value;

}