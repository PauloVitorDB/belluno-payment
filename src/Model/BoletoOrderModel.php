<?php 

namespace BellunoApi\Model;
use JsonSerializable;

class BoletoOrderModel extends OrderModel implements JsonSerializable {
    
    private $dueDate;

    private $documentCode;

    private \BellunoApi\Model\BoletoBillingAddress $billing;

    private \BellunoApi\Model\BoletoHolder $holder;

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

        $json["bankslip"] = [
            "due" => $this->dueDate,
            "value" => $this->value,
            "document_code" => $this->documentCode,
            "client" => $this->holder,
            "billing" => $this->billing,
            "cart" => $this->items,
            "postback" => $this->postback,
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
        $this->documentCode = $documentCode;

        return $this;
    }
}