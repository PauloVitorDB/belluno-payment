<?php

namespace BellunoApi\Model;

use JsonSerializable;

class BoletoBillingAddress extends AddressModel implements JsonSerializable {

    private $district;

    private $streetAddress;

    private $country;

    public function __construct() {

        if(func_num_args() == 9) {
            $this->postalCode = func_get_arg(0);
            $this->district = func_get_arg(1);
            $this->streetAddress = func_get_arg(2);
            $this->number       = func_get_arg(3);
            $this->city = func_get_arg(4);
            $this->state         = func_get_arg(5);
            $this->country = func_get_arg(6);
        }

    }

    /**
     * Get the value of district
     */ 
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }


    public function jsonSerialize() {

        $json = [
            "district" => $this->district,
            "address" => $this->streetAddress,
            "country" => $this->country,
            "number" => $this->number,
            "city" => $this->city,
            "state" => $this->state,
            "postalCode" => $this->postalCode
        ];

        return $json; 
    }
    

    /**
     * Get the value of streetAddress
     */ 
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * Set the value of streetAddress
     *
     * @return  self
     */ 
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    /**
     * Get the value of country
     * ISO 3166 ALPHA-2
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     * ISO 3166 ALPHA-2
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}