<?php

class ModelPost extends Model {

    public function drawPage(){

        $req = $this->getDb()->query('SELECT `post`.`id_post`, `post`.`title`, `post`.`content`, `post`.`description`, `post`.`published_date`, `post`.`id_user`, `user`.`username` FROM `post` INNER JOIN `user` ON `post`.`id_user` = `user`.`id_user` ORDER BY `post`.`id_post` DESC');

        $arrayobj = [];

        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $arrayobj[] = new Post($data);
        }

        return $arrayobj;
    }
}