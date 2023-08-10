<?php

namespace BellunoApi\Api\Dto;
use JsonSerializable;

class CreditCardTransactionDto implements JsonSerializable {

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
     * @var \BellunoApi\Api\Dto\CreditCardPaymentDto[]|null $payments public property
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
     * @maps client_analyses
     * @var \BellunoApi\Api\Dto\AnalysesDto[]|null $client_analyses public property
     */
    public $client_analyses;

    /**
     * @todo Write general description for this property
     * @required
     * @maps client_analyses
     * @var \BellunoApi\Api\Dto\AnalysesDto[]|null $belluno_analyses public property
     */
    public $belluno_analyses;

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
        $json["client_analyses"] = $this->client_analyses;
        $json["belluno_analyses"] = $this->belluno_analyses;

        return $json;
    }
}
