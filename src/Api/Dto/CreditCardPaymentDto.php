<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class CreditCardPaymentDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $card public property
     */
    public $card;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $brand public property
     */
    public $brand;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $installments_number public property
     */
    public $installments_number;


    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $cod_aut public property
     */
    public $cod_aut;


    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $nsu_payment public property
     */
    public $nsu_payment;
   
    /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime|null $paid_at public property
    */
    public $paid_at;

    /**
     * @todo Write general description for this property
     * @required
     * @var \BellunoApi\Api\Dto\CreditCardHolderDto|null $cardholder public property
     */
    public $cardholder;


      /**
     * @todo Write general description for this property
     * @required
     * @var \BellunoApi\Api\Dto\ShippingDto|null $billing $billing public property
     */
    public $billing;


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

        return $json;
    }
}
