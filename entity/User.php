<?php

class User {

    private $id;
    private $username;
    private $email;
    private $password;
    private $signup_date;
    private $status;

    public function __construst($datas){
        $this->hydrate($datas);
    }

    public function hydrate(array $datas){
        foreach($datas as $key => $value){
            $method = 'set' . ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function getId(){
        return $this->id;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getSignup_date(){
        return $this->signup_date;
    }

    public function getStatus(){
        return $this->status;
    }

    //SETTERS
    public function setId(int $id){
        $this->id =$id;
    }

    public function setUsername(string $username){
        $this->username = $username;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setPassword(string $password){
        $this->password =$password;
    }


    public function setSignup_date(string $signup_date){
        $this->signup_date = $signup_date;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }
}