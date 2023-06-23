<?php

namespace BellunoApi\Api\Services;

use BellunoApi\Api\BaseServiceRequest;
use BellunoApi\Api\Dto\CardHashKeyDto;
use BellunoApi\Util\ApiRest;
use BellunoApi\Util\ResponseHttpRange;
use BellunoApi\Util\Response;
use BellunoApi\Api\Environment;
use BellunoApi\Api\Authentication;

class HashService extends BaseServiceRequest {

    private static $instance;

    private function __construct() {
        parent::__construct(Environment::$BASE_URL_SDK);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    public function getHash() {

        $endpoint = '/transaction/card_hash_key';

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ],
            null
        );

        Response::validate($response, $http_code);
        
        $mapper = new \JsonMapper();
        $cardHashKeyDto = $mapper->map($response, new CardHashKeyDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::POST,
            $cardHashKeyDto,
            '',
            $response,
            $req_headers,
            $url,
            $http_code, 
            $responseHttpRange
            )
        );
        
    }


}