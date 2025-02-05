<?php

class ModelPost extends Model {

    public function drawPage(){

        $req = $this->getDb()->query('SELECT `post`.`id_post`, `post`.`title`, `post`.`content`, `post`.`description`, `post`.`published_date`, `post`.`id_user`, `user`.`username` FROM `post` INNER JOIN `user` ON `post`.`id_user` = `user`.`id_user` ORDER BY `post`.`id_post` DESC');

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
}