<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class RefundsDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime $created_at public property
     */
    public $created_at;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $reason public property
     */
    public $reason;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['created_at'] = $this->created_at;
        $json['amount'] = $this->amount;
        $json['reason'] = $this->reason;
        $json['status'] = $this->status;

        return $json;
    }
}
