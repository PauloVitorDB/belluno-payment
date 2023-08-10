<?php

namespace BellunoApi\Api\Dto;
use JsonSerializable;

class PixTransactionDto implements JsonSerializable {

    /**
     * @todo Write general description for this property
     * @required
     * @maps transaction_id
     * @var string $transaction_id public property
     */
    public $transaction_id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps link
     * @var string $link public property
     */
    public $link;

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
     * @maps reason
     * @var string|null $reason public property
     */
    public $reason;

    /**
     * @todo Write general description for this property
     * @required
     * @maps value
     * @var string $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @var \DateTime $created_at public property
     */
    public $created_at;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_by
     * @var string $created_by public property
     */
    public $created_by;

    /**
     * @todo Write general description for this property
     * @required
     * @maps code_valid_until
     * @var \DateTime $code_valid_until public property
     */
    public $code_valid_until;

    /**
     * @todo Write general description for this property
     * @maps details
     * @var string $details public property
     */
    public $details;

    /**
     * @todo Write general description for this property
     * @maps client
     * @var \BellunoApi\Api\Dto\CustomerDto|null $client public property
     */
    public $client;

    /**
     * @todo Write general description for this property
     * @required
     * @maps shipping
     * @var \BellunoApi\Api\Dto\ShippingDto $shipping public property
     */
    public $shipping;

    /**
     * @todo Write general description for this property
     * @required
     * @maps payments
     * @var \BellunoApi\Api\Dto\PixPaymentDto[]|null $payments public property
     */
    public $payments;

    /**
     * @todo Write general description for this property
     * @required
     * @maps cart
     * @var \BellunoApi\Api\Dto\OrderItemDto[] $cart public property
     */
    public $cart;

    /**
     * @todo Write general description for this property
     * @required
     * @maps pix
     * @var \BellunoApi\Api\Dto\PixDto $pix public property
     */
    public $pix;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $transaction_id
     * @param string $link
     * @param string $status
     * @param string $reason 
     * @param string $value
     * @param \DateTime $created_at
     * @param string $created_by
     * @param \DateTime $code_valid_until
     * @param string $details
     * @param \BellunoApi\Api\Dto\CustomerDto|null $client
     * @param \BellunoApi\Api\Dto\ShippingDto $shipping
     * @param \BellunoApi\Api\Dto\PixPaymentDto[]|null $payments
     * @param \BellunoApi\Api\Dto\OrderItemDto[]|null $cart
     * @param \BellunoApi\Api\Dto\PixDto $pix
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->transaction_id         = func_get_arg(0);
            $this->link       = func_get_arg(1);
            $this->status   = func_get_arg(2);
            $this->reason      = func_get_arg(3);
            $this->value   = func_get_arg(4);
            $this->created_at     = func_get_arg(5);
            $this->created_by  = func_get_arg(6);
            $this->code_valid_until    = func_get_arg(7);
            $this->details    = func_get_arg(8);
            $this->client    = func_get_arg(9);
            $this->shipping    = func_get_arg(10);
            $this->payments    = func_get_arg(11);
            $this->cart    = func_get_arg(12);
            $this->pix    = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json["transaction_id"] = $this->transaction_id;
        $json["link"] = $this->link;
        $json["status"] = $this->status;
        $json["reason"] = $this->reason;
        $json["value"] = $this->value;
        $json["created_at"] = $this->created_at;
        $json["created_by"] = $this->created_by;
        $json["code_valid_until"] = $this->code_valid_until;
        $json["details"] = $this->details;
        $json["client"] = $this->client;
        $json["shipping"] = $this->shipping;
        $json["payments"] = $this->payments;
        $json["cart"] = $this->cart;
        $json["pix"] = $this->pix;

        return $json;
    }
}
