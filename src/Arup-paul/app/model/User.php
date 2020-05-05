<?php


class User {

    public $username;
    public $email;

    public function __construct($username,$email){
        $this->username = $username;
        $this->email = $email;
    }
}



?>