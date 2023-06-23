<?php

namespace BellunoApi\Api;

abstract class Environment {

    private static $BASE_URL_PRODUCTION = "https://api.belluno.digital/v2/";
    
    private static $BASE_URL_SANDBOX = "https://api-sandbox.belluno.digital/";
    

    public static $BASE_URL;
    public static $BASE_URL_SDK;
    public static $BASE_URL_CONNECT;

    public static function production () {
        self::$BASE_URL = self::$BASE_URL_PRODUCTION;
    }

    public static function sandbox () {
        self::$BASE_URL = self::$BASE_URL_SANDBOX;  
    }

    public static function defineEnvironment($sandbox_enabled) {
        if($sandbox_enabled) {
            self::sandbox();
        } else {
            self::production();
        }
    }
}