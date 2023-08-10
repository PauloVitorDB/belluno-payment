<?php

namespace BellunoApi\Api\Services;

use BellunoApi\Api\BaseServiceRequest;
use BellunoApi\Api\Dto\PixOrderTransactionDto;
use BellunoApi\Api\Dto\BoletoOrderTransactionDto;
use BellunoApi\Api\Dto\CreditCardOrderTransactionDto;
use BellunoApi\Api\Environment;
use BellunoApi\Model\OrderModel;
use BellunoApi\Util\ApiRest;
use BellunoApi\Util\ResponseHttpRange;
use BellunoApi\Util\Response;
use BellunoApi\Api\Authentication;

class TransactionService extends BaseServiceRequest {

    private static $instance;

    private function __construct() {
        parent::__construct(Environment::$BASE_URL);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    public function createPixTransaction(
        OrderModel $order
    ) {

        $endpoint = '/transaction/pix';

        $body = json_encode($order);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ],
            $body
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $pixOrderTransactionDto = $mapper->map($response, new PixOrderTransactionDto());
      
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::POST,
            $pixOrderTransactionDto,
            $body,
            $response,
            $req_headers,
            $url,
            $http_code,
            $responseHttpRange
            )
        );
        
    }

    public function getPixTransaction($transaction_id) {

        $endpoint = "/transaction/$transaction_id/pix";

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ]
        );

        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $pixOrderTransactionDto = $mapper->map($response, new PixOrderTransactionDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::GET,
            $pixOrderTransactionDto,
            '',
            $response,
            $req_headers,
            $url,
            $http_code,
            $responseHttpRange
            )
        );
        
    }

    public function createBoletoTransaction(
        OrderModel $order
    ) {

        $endpoint = '/bankslip';

        $body = json_encode($order);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ],
            $body
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $boletoOrderTransactionDto = $mapper->map($response, new BoletoOrderTransactionDto());
      
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::POST,
            $boletoOrderTransactionDto,
            $body,
            $response,
            $req_headers,
            $url,
            $http_code,
            $responseHttpRange
            )
        );
        
    }

    public function getBoletoTransaction($transaction_id) {

        $endpoint = "/bankslip/$transaction_id";

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ]
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $boletoOrderTransactionDto = $mapper->map($response, new BoletoOrderTransactionDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::GET,
            $boletoOrderTransactionDto,
            '',
            $response,
            $req_headers,
            $url,
            $http_code,
            $responseHttpRange
            )
        );
        
    }
    
    public function createCreditCardTransaction(
        OrderModel $order
    ) {

        $endpoint = '/transaction';

        $body = json_encode($order);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ],
            $body
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $creditCardOrderTransactionDto = $mapper->map($response, new CreditCardOrderTransactionDto());
      
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::POST,
            $creditCardOrderTransactionDto,
            $body,
            $response,
            $req_headers,
            $url,
            $http_code,
            $responseHttpRange
            )
        );
        
    }

    public function getCreditCardTransaction($transaction_id) {

        $endpoint = "/transaction/$transaction_id";

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ]
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $creditCardOrderTransactionDto = $mapper->map($response, new CreditCardOrderTransactionDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::GET,
            $creditCardOrderTransactionDto,
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