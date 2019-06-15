<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15/06/2019
 * Time: 12:05 PM
 */
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

    public function __construct($question, Author $author) {
        $this->author = $author;
        $this->question = $question;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getQuestion() {
        return $this->question;
    }
}

$author = new Author("super", "admin");
$question = new Question("How to create DI PHP ?", $author);
