<?php 

namespace BellunoApi\Model;
use JsonSerializable;

class PixOrderModel extends OrderModel implements JsonSerializable {
    
    private $dueDate;
    
    private $details;

    private $documentCode;

    private \BellunoApi\Model\PixHolderModel $holder;

    private \BellunoApi\Model\ShippingModel $shipping;

    /**
     * Get the value of holder
     */ 
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * Set the value of holder
     *
     * @return  self
     */ 
    public function setHolder($holder)
    {
        $this->holder = $holder;

        return $this;
    }

    
    public function jsonSerialize() {

        $address = $this->shipping->getAddress();

        $json["transaction"] = [
            "details" => $this->details,
            "value" => $this->value,
            "document_code" => $this->documentCode,
            "client_name" => $this->holder->getName(),
            "client_document" => $this->holder->getDocumentNumber(),
            "client_email" => $this->holder->getContact()->getEmail(),
            "client_cellphone" => $this->holder->getContact()->getPhone()->getCompleteNumber(),
            "cart" => $this->items,
            "postback" => $this->postback,
            "shipping" => [
                "postalCode" => $address->getPostalCode(),
                "street" => $address->getStreet(),
                "number" => $address->getNumber(),
                "complement" => $address->getComplement(),
                "city" => $address->getCity(),
                "state" => $address->getState(),
            ],
        ];

        return $json;
    }

    /**
     * Get the value of dueDate
     */ 
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set the value of dueDate
     *
     * @return  self
     */ 
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get the value of documentCode
     */ 
    public function getDocumentCode()
    {
        return $this->documentCode;
    }

    /**
     * Set the value of documentCode
     *
     * @return  self
     */ 
    public function setDocumentCode($documentCode)
    {
        $this->documentCode = (string)$documentCode;

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