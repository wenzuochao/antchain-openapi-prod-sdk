<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class ExecAasAntdaoMypointsOrderskuResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'cardId' => 'card_id',
        'cardValue' => 'card_value',
        'needRetry' => 'need_retry',
        'orderNo' => 'order_no',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->cardId) {
            $res['card_id'] = $this->cardId;
        }
        if (null !== $this->cardValue) {
            $res['card_value'] = $this->cardValue;
        }
        if (null !== $this->needRetry) {
            $res['need_retry'] = $this->needRetry;
        }
        if (null !== $this->orderNo) {
            $res['order_no'] = $this->orderNo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ExecAasAntdaoMypointsOrderskuResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['req_msg_id'])){
            $model->reqMsgId = $map['req_msg_id'];
        }
        if(isset($map['result_code'])){
            $model->resultCode = $map['result_code'];
        }
        if(isset($map['result_msg'])){
            $model->resultMsg = $map['result_msg'];
        }
        if(isset($map['card_id'])){
            $model->cardId = $map['card_id'];
        }
        if(isset($map['card_value'])){
            $model->cardValue = $map['card_value'];
        }
        if(isset($map['need_retry'])){
            $model->needRetry = $map['need_retry'];
        }
        if(isset($map['order_no'])){
            $model->orderNo = $map['order_no'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $reqMsgId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    // 卡密ID
    /**
     * @var string
     */
    public $cardId;

    // 集分宝卡密的面值(单位:个)
    /**
     * @var integer
     */
    public $cardValue;

    // 是否需要重试
    /**
     * @var bool
     */
    public $needRetry;

    // 业务幂等ID
    /**
     * @var string
     */
    public $orderNo;

}
