<?php

class User {

    private $id_user;
    private $username;
    private $email;
    private $password;
    private $signup_date;
    private $status;

    public function __construct(array $datas) {
        $this->hydrate($datas);
    }

    public function hydrate(array $datas) {
        foreach ($datas as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function getId_user() {
        return $this->id_user;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSignup_date() {
        return $this->signup_date;
    }

    public function getStatus() {
        return $this->status;
    }

    //SETTERS
    public function setId_user(int $id_user) {
        $this->id_user = $id_user;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function setSignup_date(string $signup_date) {
        $this->signup_date = new DateTime($signup_date);
    }

    public function setStatus(int $status) {
        $this->status = $status;
    }
}