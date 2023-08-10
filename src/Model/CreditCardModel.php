<?php

namespace BellunoApi\Model;

use phpseclib3\Crypt\RSA;
use JsonSerializable;

class CreditCardModel implements JsonSerializable {

    private $card_number;
    private $expiration_date;
    private $cvv;

    public function jsonSerialize() {

        $json = [
            "card_number" => $this->card_number,
            "expiration_date" => $this->expiration_date,
            "cvv" => $this->cvv
        ];

        return $json;
    }

    public function generateHashByKey(\BellunoApi\Api\Dto\CardHashKeyDto $cardHashKeyDto) {
        
        $stringHash = "card_number=" . $this->card_number . "&card_expiration_date=" . $this->expiration_date. "&card_cvv=" . $this->cvv;

        $rsa = new RSA();

        $rsa->setEncryptionMode(RSA::ENCRYPTION_PKCS1);

        $rsa->loadKey($cardHashKeyDto->rsa_public_key);

        $crypto = $rsa->encrypt($stringHash);

        $crypto_64 = base64_encode($crypto);

        $card_hash =  "" . $cardHashKeyDto->id . "_" . $crypto_64 . "";

        return $card_hash;
    }

    /**
     * Get the value of expiration_date
     */ 
    public function getExpirationDate()
    {

        return $this->expiration_date;
    }

    /**
     * Set the value of expiration_date
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationMonth, $expirationYear)
    {
        $this->expiration_date = ($expirationMonth . $expirationYear);

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of card_number
     */ 
    public function getCardNumber()
    {
        return $this->card_number;
    }

    /**
     * Set the value of card_number
     *
     * @return  self
     */ 
    public function setCardNumber($card_number)
    {
        $this->card_number = $card_number;

        return $this;
    }
}