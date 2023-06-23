<?php

namespace BellunoApi\Model;

use JsonSerializable;

class PhoneModel implements JsonSerializable {

    private $country_DDI;
    private $area_DDD;
    private $phone_number;
    
    /**
     * @param \BellunoApi\Model\AddressModel $address
     **/
    public function __construct($country_DDI, $area_DDD, $phone_number) {
        $this->country_DDI = $country_DDI;
        $this->area_DDD = $area_DDD;
        $this->phone_number = $phone_number;
    }

    public function jsonSerialize() {

        $json = [
            "country" => $this->country_DDI,
            "area" => $this->area_DDD,
            "number" => $this->phone_number
        ];

        return $json;
    }

}