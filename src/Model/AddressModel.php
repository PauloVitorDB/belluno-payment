<?php

namespace BellunoApi\Model;

use JsonSerializable;

class AddressModel implements JsonSerializable {

    protected $street;
    protected $number;
    protected $complement;
    protected $city;
    protected $state;
    protected $postalCode;

    public function __construct() {

        if(func_num_args() == 6) {
            $this->street       = func_get_arg(0);
            $this->number       = func_get_arg(1);
            $this->complement      = func_get_arg(2);
            $this->city = func_get_arg(3);
            $this->state         = func_get_arg(4);
            $this->postalCode = func_get_arg(5);
        }

    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of complement
     */ 
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of complement
     *
     * @return  self
     */ 
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     * ISO 3166-2
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of postalCode
     */ 
    public function getPostalCode()
    {
        return $this->postalCode;
    }

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