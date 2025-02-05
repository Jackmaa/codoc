<?php

class Category {

    private $id;
    private $name;

    public function __construct(array $datas){
        $this->hydrate($datas);
    }

    public function hydrate($dastas){
        foreach($datas as $key => $value){
            $method = 'set' . ucfirst($key);

            if(method_exists($vthis, $method)){
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    //SETTERS
    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }
}