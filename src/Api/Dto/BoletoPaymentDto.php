<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class BoletoPaymentDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $discount public property
     */
    public $discount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $net_value public property
     */
    public $net_value;


    /**
     * @todo Write general description for this property
     * @required
     * @var string $bankslip_fee public property
     */
    public $bankslip_fee;


    /**
     * @todo Write general description for this property
     * @required
     * @var string $paid_value public property
     */
    public $paid_value;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $fine public property
     */
    public $fine;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $interest public property
     */
    public $interest;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $transfer_batch public property
     */
    public $transfer_batch;

    /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime $payment_date public property
    */
    public $payment_date;

     /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime $transfer_date public property
    */
    public $transfer_date;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['discount'] = $this->discount;
        $json['net_value'] = $this->net_value;
        $json['bankslip_fee'] = $this->bankslip_fee;
        $json['paid_value'] = $this->paid_value;
        $json['fine'] = $this->fine;
        $json['interest'] = $this->interest;
        $json['value'] = $this->value;
        $json['transfer_batch'] = $this->transfer_batch;
        $json["transfer_date"] = $this->transfer_date;
        $json['payment_date'] = $this->payment_date;

        return $json;
    }
}
