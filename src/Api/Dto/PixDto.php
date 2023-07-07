<?php

namespace BellunoApi\Api\Dto;

use JsonSerializable;

class PixDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $base64_text public property
     */
    public $base64_text;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $base64_image public property
     */
    public $base64_image;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $expires_at public property
     */
    public $expires_at;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['base64_text'] = $this->base64_text;
        $json['base64_image'] = $this->base64_image;
        $json['expires_at'] = $this->expires_at;

        return $json;
    }
}
