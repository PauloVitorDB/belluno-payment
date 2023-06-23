<?php

namespace BellunoApi\Model;

use JsonSerializable;

class CreditCardBillingAddress extends AddressModel implements JsonSerializable {

    public function jsonSerialize() {

        $json = [
            "street" => $this->street,
            "number" => $this->number,
            "complement" => $this->complement,
            "city" => $this->city,
            "state" => $this->state,
            "postalCode" => $this->postalCode
        ];

        return $json; 
    }
    
}