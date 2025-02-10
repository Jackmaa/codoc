<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="../public/assets/img/light.svg">
    <title><?= $data->getTitle();?></title>
</head>
<body>

    <article>
        <h1><?= $data->getTitle();?></h1>
        <p><?= $data->getDescription(); ?></p>
        <p><?= $data->getContent(); ?></p>
        <p><?= $data->getPublished_date()->format('m/d/Y'); ?></p>
        <a href="<?php echo $router->generate('deletepost', ['id_post' => $data->getId_post()]); ?>" class="btn">Delete</a>
        <a href="<?= $router->generate('home');?>" class="btn">Retour</a>
    </article>
</body>
</html>