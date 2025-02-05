<?php

class ControllerPost {

    public function home() {
        global $router;
        $model = new ModelPost();
        $datas = $model->drawPage();
        //var_dump($datas);
        require_once './view/homepage.php';
    }
}