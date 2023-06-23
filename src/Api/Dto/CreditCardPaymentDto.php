<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class CreditCardPaymentDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $card public property
     */
    public $card;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $brand public property
     */
    public $brand;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $installments_number public property
     */
    public $installments_number;


    /**
     * @todo Write general description for this property
     * @required
     * @var string $cod_aut public property
     */
    public $cod_aut;


    /**
     * @todo Write general description for this property
     * @required
     * @var string $nsu_payment public property
     */
    public $nsu_payment;
   
    /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime $paid_at public property
    */
    public $paid_at;

    /**
     * @todo Write general description for this property
     * @required
     * @var \BellunoApi\Api\Dto\CreditCardHolderDto $cardholder public property
     */
    public $cardholder;


      /**
     * @todo Write general description for this property
     * @required
     * @var \BellunoApi\Api\Dto\ShippingDto $billing $billing public property
     */
    public $billing;

    /**
     * @todo Write general description for this property
     * @required
     * @var \BellunoApi\Api\Dto\RefundsDto $refunds public property
     */
    public $refunds;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json["type"] = $this->type;
        $json["card"] = $this->card;
        $json["brand"] = $this->brand;
        $json["installments_number"] = $this->installments_number;
        $json["cod_aut"] = $this->cod_aut;
        $json["nsu_payment"] = $this->nsu_payment;
        $json["paid_at"] = $this->paid_at;
        $json["cardholder"] = $this->cardholder;
        $json["billing"] = $this->billing;
        $json["refunds"] = $this->refunds;

        return $json;
    }
}
