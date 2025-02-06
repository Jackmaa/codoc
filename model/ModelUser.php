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
                *
            FROM
                `user`
            WHERE
                `email` = :email');
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->execute();

        if ($user->rowCount() > 0) {
            $data = $user->fetch(PDO::FETCH_ASSOC);
            return $data ? new User($data) : null;
        }
    }

    public function isLoggedIn() {
        if (isset($_SESSION['id'])) {
            header('Location: /codoc');
        }
    }

    protected function register(string $username, string $email, string $password) {
        $user = $this->getDb()->prepare(
            'INSERT INTO
                `user` (`username`, `email`, `password`, `signup_date`)
            VALUES
                (:username, :email, :password, NOW())');

        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => $this->getCost()]);
        $user->bindParam(':username', $username, PDO::PARAM_STR);
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->bindParam(':password', $password, PDO::PARAM_STR);
        $user->execute();
    }
}