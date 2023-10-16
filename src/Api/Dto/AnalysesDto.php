<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class AnalysesDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $decision public property
     */
    public $decision;


    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $details public property
     */
    public $details;
    
    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['decision'] = $this->decision;
        $json['details'] = $this->details;
        return $json;
    }
}
