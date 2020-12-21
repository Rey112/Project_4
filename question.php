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
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBody() {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body) {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getSkills() {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     */
    public function setSkills($skills) {
        $this->skills = $skills;
    }
   
   /**
     * @return mixed
     */
    public function getQuestionId() {
        return $this->questionId;
    }

    /**
     * @param $questionId
     */
    public function setQuestionId($questionId) {
        $this->questionId = $questionId;
    }

}



