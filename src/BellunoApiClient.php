<?php

namespace BellunoApi;

use BellunoApi\Api\Authentication;
use BellunoApi\Api\Environment;

class BellunoApiClient {

    public function __construct(
        $user_token = "",
        $sandbox_environment = false
    ) {
        Authentication::$USER_TOKEN = $user_token;
        Environment::defineEnvironment($sandbox_environment);
    }


    public function getTransactionService() {
        return \BellunoApi\Api\Services\TransactionService::getInstance();
    }

    public function getHashService() {
        return \BellunoApi\Api\Services\HashService::getInstance();
    }


}