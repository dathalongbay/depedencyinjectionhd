<?php
class Author {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
}

class Question {
    private $author;
    private $question;
    public function __construct($question, $authorFirstName, $authorLastName) {
        $this->author = new Author($authorFirstName, $authorLastName);
        $this->question = $question;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getQuestion() {
        return $this->question;
    }
}

$question = new Question("How to create DI PHP ?", "super", "admin");
