<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class CustomerDto implements JsonSerializable
{

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $document public property
     */
    public $document;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $phone public property
     */
    public $phone;

     /**
     * @todo Write general description for this property
     * @required
     * @var string|null $cellphone public property
     */
    public $cellphone;

    /**
     * Constructor to set initial or default values of member properties
     * @param string              $name  
     * @param string              $email 
     * @param string              $document
     * @param string|null         $phone
     * @param string|null         $cellphone
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->name          = func_get_arg(0);
            $this->email         = func_get_arg(1);
            $this->document    = func_get_arg(2);
            $this->phone     = func_get_arg(3);
            $this->cellphone     = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']              = $this->name;
        $json['email']           = $this->email;
        $json['document']      = $this->document;
        $json['phone']            = $this->phone;
        $json['cellphone']            = $this->cellphone;

        return $json;
    }
}
