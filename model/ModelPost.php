<?php

class ModelPost extends Model {

    public function drawPage(){

        $req = $this->getDb()->query('SELECT `post`.`id_post`, `post`.`title`, `post`.`content`, `post`.`description`, `post`.`published_date`, `post`.`id_user`,`post`.`like`, `user`.`username` FROM `post` INNER JOIN `user` ON `post`.`id_user` = `user`.`id_user` ORDER BY `post`.`id_post` DESC');

        $arrayobj = [];

        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $arrayobj[] = new PostDTO(new Post($data), $data['username']);
        }

        return $arrayobj;
    }

    public function read(int $id){
        $req = $this->getDb()->prepare('SELECT `id_post`, `title`, `content`, `description`, `published_date`, `id_user` FROM post WHERE `id_post` = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return new Post($req->fetch(PDO::FETCH_ASSOC));
    }

    public function createPost(string $title, string $content, string $description, int $id_user){

        $req = $this->getDb()->prepare('INSERT INTO `post`(`title`, `content`, `description`, `published_date`, `id_user`) VALUES (:title,:content,:description,CURRENT_TIME,:id_user)');
        $req->bindParam(':title', $title, PDO::PARAM_STR);
        $req->bindParam(':content', $content, PDO::PARAM_STR);
        $req->bindParam(':description', $description, PDO::PARAM_STR);
        $req->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $req->execute();
        
    }

    public function deletePost(int $id_post){
        
        $getpost = $this->getDb()->prepare('SELECT * FROM post WHERE `id_post` = :id_post');
        $getpost->bindParam(':id_post', $id_post, PDO::PARAM_INT);
        $getpost->execute();
        if($getpost->rowcount() > 0){
            $deletepost = $this->getDb()->prepare('DELETE FROM post WHERE `id_post` = :id_post');
            $deletepost->bindParam(':id_post', $id_post, PDO::PARAM_INT);
            $deletepost->execute();
        }
    }

    public function displayLike(){

        $getlike = $this->getDb()->prepare('SELECT `like` FROM post');
        $getlike->execute();
        echo json_encode($getlike->fetch(PDO::FETCH_ASSOC)); 

    }
}