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

    public function create(){

        global $router;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['description']) && !empty($_POST['id_user'])){
                $model = new ModelPost();
                $model->createPost($_POST['title'], $_POST['content'], $_POST['description'], $_POST['id_user']);
                echo "Nouceau codoc enregistré avec succès !";
                header('Location: /codoc');
            }else{
                var_dump($_POST);
                $error = "Veuillez remplir tous les champs !";
                require_once('./view/createpost.php');
            }
           
        }else{
            require_once('./view/createpost.php');
        }
        
    }
}