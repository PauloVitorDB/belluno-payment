<?php

namespace BellunoApi\Api\Dto;
use JsonSerializable;

class BoletoTransactionDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @maps id
     * @var string $id public property
     */
    public $id;
    
    /**
     * @todo Write general description for this property
     * @required
     * @maps due
     * @var \DateTime $due public property
     */
    public $due;

    /**
     * @todo Write general description for this property
     * @required
     * @maps document_code
     * @var string $document_code public property
     */
    public $document_code;

    /**
     * @todo Write general description for this property
     * @required
     * @maps status
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps url
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @required
     * @maps digitable_line
     * @var string $digitable_line public property
     */
    public $digitable_line;
  
    /**
     * @todo Write general description for this property
     * @maps client
     * @var \BellunoApi\Api\Dto\CustomerDto|null $client public property
     */
    public $client;

    /**
     * @todo Write general description for this property
     * @required
     * @maps billing
     * @var \BellunoApi\Api\Dto\ShippingDto $billing public property
     */
    public $billing;

    /**
     * @todo Write general description for this property
     * @required
     * @maps payment
     * @var \BellunoApi\Api\Dto\BoletoPaymentDto|null $payment public property
     */
    public $payment;

    /**
     * @todo Write general description for this property
     * @required
     * @maps cart
     * @var \BellunoApi\Api\Dto\OrderItemDto[] $cart public property
     */
    public $cart;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id
     * @param \DateTime $due 
     * @param string $document_code
     * @param string $status 
     * @param string $url
     * @param string $digitable_line
     * @param \BellunoApi\Api\Dto\CustomerDto|null $client
     * @param \BellunoApi\Api\Dto\ShippingDto $billing 
     * @param \BellunoApi\Api\Dto\BoletoPaymentDto|null $payment
     * @param \BellunoApi\Api\Dto\OrderItemDto[]|null $cart
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->due   = func_get_arg(1);
            $this->document_code    = func_get_arg(2);
            $this->status    = func_get_arg(3);
            $this->url    = func_get_arg(4);
            $this->digitable_line    = func_get_arg(5);
            $this->client    = func_get_arg(6);
            $this->billing    = func_get_arg(7);
            $this->payment    = func_get_arg(8);
            $this->cart    = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json["id"] = $this->id;
        $json["due"] = $this->due;
        $json["document_code"] = $this->document_code;
        $json["status"] = $this->status;
        $json["url"] = $this->url;
        $json["digitable_line"] = $this->digitable_line;
        $json["client"] = $this->client;
        $json["billing"] = $this->billing;
        $json["payment"] = $this->payment;
        $json["cart"] = $this->cart;

        return $json;
    }
}
