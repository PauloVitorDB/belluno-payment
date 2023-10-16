<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class ShippingDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $street public property
     */
    public $street;


    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $number public property
     */
    public $number;


    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $state public property
     */
    public $state;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $complement public property
     */
    public $complement;

  
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->postalCode = func_get_arg(0);
            $this->street = func_get_arg(0);
            $this->number = func_get_arg(0);
            $this->city = func_get_arg(0);
            $this->state = func_get_arg(0);
            $this->complement = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['postalCode'] = $this->postalCode;
        $json['street'] = $this->street;
        $json['number'] = $this->number;
        $json['city'] = $this->city;
        $json['state'] = $this->state;
        $json['complement'] = $this->complement;
        return $json;
    }
}
