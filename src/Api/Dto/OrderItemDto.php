<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class OrderItemDto implements JsonSerializable {

    /**
     * @todo Write general description for this property
     * @required
     * @var string $product_name public property
     */
    public $product_name;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $unit_value public property
     */
    public $unit_value;

    /**
     * @todo Write general name for this property
     * @required
     * @var integer $quantity public property
     */
    public $quantity;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $product_name          Initialization value for $this->reference_id
     * @param integer $unit_value    Initialization value for $this->unit_amount
     * @param string  $quantity Initialization value for $this->quantity
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->product_name          = func_get_arg(0);
            $this->unit_value      = func_get_arg(1);
            $this->quantity = func_get_arg(2);
        }
    }

    public function jsonSerialize()
    {
        $json = array();
        $json['product_name']          = $this->product_name;
        $json['unit_value']      = $this->unit_value;
        $json['quantity'] = $this->quantity;

        return $json;
    }
}
