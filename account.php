<?php
class AccountDB {
    private $id, $email, $firstName, $lastName, $phoneNumber, $birthday, $password;

    public function __construct($id, $email, $firstName, $lastName, $phoneNumber, $birthday, $password) {
        $this->id = $id;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->birthday = $birthday;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getfirstName()
    {
        return $this->firstName;
    }

    public function setfirstName($value)
    {
        $this->firstName = $value;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function setlastName($value)
    {
        $this->lastName = $value;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($value)
    {
        $this->phoneNumber = $value;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($value)
    {
        $this->birthday = $value;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($value)
    {
        $this->password = $value;
    }


}
