<?php
    class caculate{
        public $username;
        public $gender;
        public $province;
        public $email;
    function __construct($username,$gender,$province,$email){
        $this->username=$username;
        $this->gender=$gender;
        $this->province=$province;
        $this->email=$email;
    }
    function getUsername(){
        return $this->username;
    }
    function getGender(){
        return $this->gender;
    }
    function getProvince(){
        return $this->province;
    }
    function getEmail(){
        return $this->email;
    }
    }
?>