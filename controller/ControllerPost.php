<?php

class ControllerPost {
    public function home() {

        global $router;
        $model = new ModelPost();
        $datas = $model->drawPage();
        //var_dump($datas);
        require_once './view/homepage.php';
    }

    public function read($id) {

        global $router;
        $model = new ModelPost();
        $data  = $model->read($id);
        //var_dump($data);
        require_once './view/postpage.php';
    }

    public function create() {

        global $router;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (! empty($_POST['title']) && ! empty($_POST['content']) && ! empty($_POST['description']) && ! empty($_POST['id_user'])) {
                $model = new ModelPost();
                $model->createPost($_POST['title'], nl2br($_POST['content']), $_POST['description'], $_POST['id_user']);
                header('Location: /codoc');
            } else {
                $error = "Veuillez remplir tous les champs !";
                require_once './view/createpost.php';
            }
        } else {
            require_once './view/createpost.php';
        }
    }

    public function delete(int $id_post) {

        global $router;
        $model = new ModelPost();
        $data  = $model->deletePost($id_post);
        header('Location: /codoc');
    }

    public function notfound() {
        require_once './view/404.php';
    }

    public function displayLike(int $id_post) {

        global $routeur;
        $model = new ModelPost();
        $data  = $model->displayLike($id_post);
        // Set the correct response header
        header("Content-Type: application/json");

        // Ensure the response is JSON
        echo json_encode($data);
        exit; // Prevent extra output
    }

    public function likePost(int $id_post, int $id_user){

        $model = new ModelPost();
        $isLiked = $model->getLike($id_post, $id_user);
        header("Content-Type: application/json");
        echo json_encode($isLiked);
        // if($isLiked){
            
        // }
    }

    public function random() { // Select random id post then header Location to the random post
        global $router;
        $model = new ModelPost();
        $id    = $model->randomPost();

        header('Location: /codoc/post/' . $id);
    }

}