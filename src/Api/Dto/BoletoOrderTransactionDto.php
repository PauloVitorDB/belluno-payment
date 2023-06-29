<?php

namespace BellunoApi\Api\Dto;
use JsonSerializable;

class BoletoOrderTransactionDto implements JsonSerializable {
    

    /**
     * @todo Write general description for this property
     * @required
     * @var \BellunoApi\Api\Dto\BoletoTransactionDto $bankslip public property
     */
    public $bankslip;

    /**
     * Constructor to set initial or default values of member properties
     * @param \BellunoApi\Api\Dto\BoletoTransactionDto $bankslip 
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->bankslip = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['bankslip'] = $this->bankslip;

        return $json;
    }
}
