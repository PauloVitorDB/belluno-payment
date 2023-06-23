<?php

namespace BellunoApi\Api;

use BellunoApi\Util\ApiRest;
use BellunoApi\Util\RequestInterface;

abstract class BaseServiceRequest {

    protected RequestInterface $request;

    public function __construct($BASE_URL) {
        $this->request = new ApiRest($BASE_URL);
    }

}