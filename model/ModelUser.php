<?php

class ModelUser {

    public function getUser(int $id){
        $user = $this->getDb()->prepare('SELECT `id_user`, `username`, `email`, `password`, `signup_date`, `status` FROM `user`  WHERE `id_user` = :id');
        $user->bindParam(':id', $id, PDO::PARAM_INT);
        $user->execute();
        return new User($user->fetch(PDO::FETCH_ASSOC));
    }
    
}