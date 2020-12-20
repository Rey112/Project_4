<?php
class question {
    private $title, $body, $skills, $questionId;

    public function __construct($title, $body, $skills, $questionId) {
        $this->title = $title;
        $this->body = $body;
        $this->skills = $skills;
        $this->questionId = $questionId;
    }

    /**
     * @return mixed
     */
    public function gettitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function settitle($value) {
        $this->title = $value;
    }

    /**
     * @return mixed
     */
    public function getbody() {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setbody($value) {
        $this->body = $value;
    }

    /**
     * @return mixed
     */
    public function getskills() {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     */
    public function setskills($value) {
        $this->skills = $value;
    }

}
