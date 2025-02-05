<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data->getTitle();?></title>
</head>
<body>
    <h1><?= $data->getTitle();?></h1>
    <p><?= $data->getDescription(); ?></p>
    <p><?= $data->getContent(); ?></p>
    <p><?= $data->getPublished_date(); ?></p>
    <a href="<?= $router->generate('home');?>"><<< Retour</a>
</body>
</html>