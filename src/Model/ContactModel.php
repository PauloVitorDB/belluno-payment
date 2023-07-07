<?php

namespace BellunoApi\Model;

use BellunoApi\Model\PhoneModel;

class ContactModel {

    /**
    * @var string $email
    */
    private $email;

    /**
    * @var \BellunoApi\Model\PhoneModel $phone
    */
    private $phone;

    public function setPhone($ddi, $ddd, $number, $complete_number) {

        $this->phone = new PhoneModel(
            $ddi,
            $ddd,
            $number, 
            $complete_number
        );
    }

    public function getPhone() {
        return $this->phone;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

}