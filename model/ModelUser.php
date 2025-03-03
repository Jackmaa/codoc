<?php

class ModelUser extends Model {

    public function getUser(int $id) {

        $user = $this->getDb()->prepare('SELECT `id_user`, `username`, `email`, `password`, `signup_date`, `status` FROM `user`  WHERE `id_user` = :id');
        $user->bindParam(':id', $id, PDO::PARAM_INT);
        $user->execute();
        return new User($user->fetch(PDO::FETCH_ASSOC));
    }

    public function getUserByEmail(string $email) {

        $user = $this->getDb()->prepare(
            'SELECT
                `id_user`, `username`, `email`, `password`
            FROM
                `user`
            WHERE
                `email` = :email');
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->execute();

        $data = $user->fetch(PDO::FETCH_ASSOC);

        return $data ? new User($data) : null;
    }

    public function isLoggedIn() {

        if (isset($_SESSION['id'])) {
            header('Location: /codoc');
        }
    }

    public function createUser(string $username, string $email, string $password) {

        $user = $this->getDb()->prepare(
            'INSERT INTO
                `user` (`username`, `email`, `password`, `signup_date`)
            VALUES
                (:username, :email, :password, NOW())');

        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => $this->setCost(0.250)]);
        $user->bindParam(':username', $username, PDO::PARAM_STR);
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->bindParam(':password', $password, PDO::PARAM_STR);
        $user->execute();
    }

    public function checkUserMail(string $email){

        $user = $this->getDb()->prepare('SELECT `email` FROM user WHERE `email` = :email');
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->execute();
        $data = $user->fetch(PDO::FETCH_ASSOC);
        $isChecked = false;

        if($data){
            $isChecked = false;
        } else{
            $isChecked = true;
        }
        return $isChecked;
    }

    public function checkUserName(string $username){

        $user = $this->getDb()->prepare('SELECT `username` FROM user WHERE `username` = :username');
        $user->bindParam(':username', $username, PDO::PARAM_STR);
        $user->execute();
        $data = $user->fetch(PDO::FETCH_ASSOC);
        $isChecked = false;

        if($data){
            $isChecked = false;
        } else{
            $isChecked = true;
        }
        return $isChecked;
    }

    
}