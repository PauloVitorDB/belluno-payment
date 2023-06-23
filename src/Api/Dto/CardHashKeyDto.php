<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class CardHashKeyDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $rsa_public_key public property
     */
    public $rsa_public_key;


    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;
    
    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['rsa_public_key'] = $this->rsa_public_key;
        $json['id'] = $this->id;
        return $json;
    }
}
