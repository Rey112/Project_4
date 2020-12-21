<?php
class Account
{
    private $id, $email, $fname, $lname, $phoneNumber, $birthday, $password;

    public function __construct($id, $email, $fname, $lname, $phoneNumber, $birthday, $password)
    {
        $this->id = $id;
        $this->email = $email;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->phoneNumber = $phoneNumber;
        $this->birthday = $birthday;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFname() {
        return $this->fname;
    }

    /**
     * @param $fname
     */
    public function setFname($fname) {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname() {
        return $this->lname;
    }

    /**
     * @param $lname
     */
    public function setLname($lname) {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getBirthday() {
        return $this->birthday;
    }

    /**
     * @param $birthday
     */
    public function setBirthday($birthday) {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }
}

?>
