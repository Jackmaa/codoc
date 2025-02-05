<?php

abstract class Model {

    private static $db;
    private $cost;

    //GETTERS
    protected function getDb(){
        if(self::$db == null){
            self::setDb();
        }
        return self::$db;
    }

    public function getCost(){
        return self::$cost;
    }


    //SETTERS
    private static function setDb(){
        try{
            self::$db = new PDO('mysql:host=localhost;dbname=codoc', 'root', '');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function setCost($timeTarget){
        $cost = 10;
        do{
            $cost++;
            $tart = microtime(true);
            password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
            $end = microtime(true);
        } while (($end - $start) < $timeTarget);

        $this->cost = $cost;
        return $cost;
    }
}