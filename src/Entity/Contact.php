<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


class Contact 
{
    

    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $message;
    private $property;

    public function __construct()
    {

    }
    
    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setFirstName($firstname)
    {
        $this->firstname=$firstname;
    }
   
    public function setLastName($lastname)
    {
        $this->lastname=$lastname;
    }
    public function setPhone($phone)
    {
        $this->phone=$phone;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function setMessage($message)
    {
        $this->message=$message;
    }

    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($property)
    {
        $this->property=$property;
    }
}