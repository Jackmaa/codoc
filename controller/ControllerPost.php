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
}