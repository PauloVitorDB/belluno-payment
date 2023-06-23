<?php

namespace BellunoApi\Model;

use JsonSerializable;

class PostbackModel implements JsonSerializable {

    private $postback_url;

    /**
     * @param \BellunoApi\Model\AddressModel $address
     **/
    public function __construct($postback_url) {
        $this->postback_url = $postback_url;
    }

    public function jsonSerialize() {

        $json = [
            "url" => $this->postback_url,
        ];

        return $json;
    }

}