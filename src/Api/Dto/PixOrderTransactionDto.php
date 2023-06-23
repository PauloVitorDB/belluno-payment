<?php

namespace BellunoApi\Api\Dto;
use JsonSerializable;

class PixOrderTransactionDto implements JsonSerializable {
    

    /**
     * @todo Write general description for this property
     * @required
     * @var \BellunoApi\Api\Dto\PixTransactionDto $transaction public property
     */
    public $transaction;

    /**
     * Constructor to set initial or default values of member properties
     * @param \BellunoApi\Api\Dto\PixTransactionDto $transaction 
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->transaction = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['transaction'] = $this->transaction;

        return $json;
    }
}
