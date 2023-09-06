<?php

namespace BellunoApi\Model;

use JsonSerializable;

class OrderItemModel implements JsonSerializable {

    private $reference_id;
    private $name;
    private int $quantity;
    private $unit_amount;


    function __construct() {

        if(func_num_args() == 3) {
            $this->name = func_get_arg(0);
            $this->quantity = func_get_arg(1);
            $this->unit_amount = func_get_arg(2);
        }

    }

    public function jsonSerialize() {
        
        $json = [
            "product_name" => $this->name,
            "quantity" => $this->quantity,
            "unit_value" => $this->unit_amount
        ];

        return $json;
    } 

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of unit_amount
     */ 
    public function getUnitAmount()
    {
        return $this->unit_amount;
    }

    /**
     * Set the value of unit_amount
     *
     * @return  self
     */ 
    public function setUnitAmount($unit_amount)
    {
        $this->unit_amount = $unit_amount;

        return $this;
    }
}