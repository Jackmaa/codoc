<?php 
$path = "../public/assets/";
$stylesheet = $path."css/styles.css";
$title = $data->getTitle();
$meta_description = $data->getDescription();
ob_start();
?>

    <?php
        //fil d'ariane
        $url = $_SERVER['REQUEST_URI'];
        $url = ltrim($url, $url[0]);
        $url = str_replace('/', ' > ', $url);
        $url = str_replace('codoc', '<a href="' . $router->generate('home') . '">codoc</a>', $url);
        $url = str_replace('postpage', '<a href="' . $router->generate('home') . '">postpage</a>', $url);   
    ?>
    <div class="ariane"><?= $url ?></div>
    <article>
        
        <h1><?php echo $data->getTitle();?></h1>
        <p><?php echo $data->getDescription();?></p>
        <p><?php echo $data->getContent();?></p>
        <p><?php echo $data->getPublished_date()->format('m/d/Y');?></p>
        <a href="<?php echo $router->generate('deletepost', ['id_post' => $data->getId_post()]); ?>"><img class="icons" src="<?= $path?>img/poubelle.svg" alt=""> Delete</a>
        <a href="<?php echo $router->generate('home');?>">Retour</a>
        
    </article>
    <script src="./public/assets/js/main.js"></script>
<?php 
$content = ob_get_contents();
ob_end_clean();
require_once('./view/base_html.php');
?>