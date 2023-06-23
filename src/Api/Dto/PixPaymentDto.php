<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class PixPaymentDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $pix_code public property
     */
    public $pix_code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $fee public property
     */
    public $fee;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $net_value public property
     */
    public $net_value;

    /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime $paid_at public property
    */
    public $paid_at;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type'] = $this->type;
        $json['pix_code'] = $this->pix_code;
        $json['value'] = $this->value;
        $json['fee'] = $this->fee;
        $json['net_value'] = $this->net_value;
        $json['paid_at'] = $this->paid_at;

        return $json;
    }
}
