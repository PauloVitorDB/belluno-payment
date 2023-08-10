<?php 

namespace BellunoApi\Model;
use JsonSerializable;

class CreditCardOrderModel extends OrderModel implements JsonSerializable {

    private $encrypted;
    
    private int $installments = 1;

    private $capture = 1;

    private $brand;

    private $ip;

    private $details;

    private $visitorID;

    private \BellunoApi\Model\CreditCardBillingAddress $billing;

    private \BellunoApi\Model\CardHolder $cardHolder;
    
    private \BellunoApi\Model\CardHolder $clientHolder;

    private \BellunoApi\Model\ShippingModel $shipping;
    
    public function jsonSerialize() {

        $json["transaction"] = [
            "capture" => $this->capture,
            
            "card_hash" => $this->encrypted,
            
            "cardholder_name" => $this->cardHolder->getName(),
            "cardholder_document" => $this->cardHolder->getDocumentNumber(),
            "cardholder_cellphone" => $this->cardHolder->getContact()->getPhone(),
            "cardholder_birth" => $this->cardHolder->getBirthDate(),
            
            "brand" => $this->brand,

            "installment_number" => $this->installments,
            
            "visitor_id" => $this->visitorID,
            
            "payer_ip" => $this->ip,

            "client_name" => $this->clientHolder->getName(),            
            "client_document" => $this->clientHolder->getDocumentNumber(),
            "client_email" => $this->clientHolder->getContact()->getEmail(),
            "client_cellphone" => $this->clientHolder->getContact()->getPhone()->getCompleteNumber(),

            "details" => $this->details,
            "value" => $this->value,
            "shipping" => $this->shipping,
            "billing" => $this->billing,
            "cart" => $this->items,
            "postback" => $this->postback,
        ];

        return $json;
    }

    /**
     * Get the value of encrypted
     */ 
    public function getEncrypted()
    {
        return $this->encrypted;
    }

    /**
     * Set the value of encrypted
     *
     * @return  self
     */ 
    public function setEncrypted($encrypted)
    {
        $this->encrypted = $encrypted;

        return $this;
    }

    /**
     * Get the value of installments
     */ 
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set the value of installments
     *
     * @return  self
     */ 
    public function setInstallments($installments)
    {
        $this->installments = (int)$installments;

        return $this;
    }

    /**
     * Get the value of capture
     */ 
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * Set the value of capture
     *
     * @return  self
     */ 
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get the value of cardHolder
     */ 
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * Set the value of cardHolder
     *
     * @return  self
     */ 
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;

        return $this;
    }

    /**
     * Get the value of clientHolder
     */ 
    public function getClientHolder()
    {
        return $this->clientHolder;
    }

    /**
     * Set the value of clientHolder
     *
     * @return  self
     */ 
    public function setClientHolder($clientHolder)
    {
        $this->clientHolder = $clientHolder;

        return $this;
    }

    /**
     * Get the value of ip
     */ 
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set the value of ip
     *
     * @return  self
     */ 
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of details
     */ 
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set the value of details
     *
     * @return  self
     */ 
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get the value of billing
     */ 
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Set the value of billing
     *
     * @return  self
     */ 
    public function setBilling($billing)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * Get the value of shipping
     */ 
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set the value of shipping
     *
     * @return  self
     */ 
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }
}