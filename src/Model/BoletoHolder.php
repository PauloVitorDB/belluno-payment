<?php 

namespace BellunoApi\Model;
use JsonSerializable;

class BoletoHolder implements JsonSerializable {

    private $name;
    private ContactModel $contact;

    private AddressModel $address;

    private $document_number;

    public function jsonSerialize() {

        $json = [
            "name" => $this->name,
            "document" => $this->document_number,
            "email" => $this->contact->getEmail(),
            "phone" => $this->contact->getPhone()->getCompleteNumber()
        ];

        return $json;
    }

        /**
     * Get the value of document_number
     */ 
    public function getDocumentNumber()
    {
        return $this->document_number;
    }

    /**
     * Set the value of document_number
     *
     * @return  self
     */ 
    public function setDocumentNumber($document_number)
    {
        $this->document_number = $document_number;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of contact
     */ 
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */ 
    public function setContact(ContactModel $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress(AddressModel $address)
    {
        $this->address = $address;

        return $this;
    }
} 