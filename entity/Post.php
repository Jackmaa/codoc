<?php

class Post {

    private $id_post;
    private $title;
    private $content;
    private $description;
    private $published_date;
    private $id_user;
    private $like;

    public function __construct($datas){
        $this->hydrate($datas);
    }

    public function hydrate($datas){
        foreach($datas as $key => $value){
            $method = 'set' . ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function getId_post(){
        return $this->id_post;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPublished_date(){
        return $this->published_date;
    }

    public function getId_user(){
        return $this->id_user;
    }

    public function getLike(){
        return $this->like;
    }


    //SETTERS
    public function setId_post(int $id_post){
        $this->id_post = $id_post;
    }

    public function setTitle(string $title){
        $this->title= $title;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function setPublished_date(string $published_date){
        $this->published_date = new DateTime($published_date);
    }

    public function setId_user(int $id_user){
        $this->id_user = $id_user;
    }

    public function setLike(int $like){
        $this->like = $like;
    }
}