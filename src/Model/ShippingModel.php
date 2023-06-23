<?php

namespace BellunoApi\Model;

use JsonSerializable;

class ShippingModel implements JsonSerializable {

    private \BellunoApi\Model\AddressModel $address;
    
    /**
     * @param \BellunoApi\Model\AddressModel $address
     **/
    public function __construct($address) {
        $this->address = $address;
    }

    public function jsonSerialize() {

        $json = [
            "shipping" => $this->address
        ];

        return $json;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}