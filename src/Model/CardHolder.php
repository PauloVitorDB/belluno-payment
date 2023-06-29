<?php 

namespace BellunoApi\Model;

class CardHolder {

    private $name;
    private ContactModel $contact;

    private $documentNumber;

    private $birthDate;

    /**
     * Get the value of documentNumber
     */ 
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * Set the value of documentNumber
     *
     * @return  self
     */ 
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;

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
        $this->name = trim($name);

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
     * Get the value of birthDate
     * DD/MM/YYYY
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     * DD/MM/YYYY
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }
} 