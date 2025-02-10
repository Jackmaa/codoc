<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="./public/assets/img/light.svg">
    <title>Homepage</title>
</head>
<body>
    <section>
        <?php if (isset($_SESSION['name'])) {?>
            <h2>Bonjour&nbsp;<?php echo $_SESSION['name']; ?></h2>
            <a href="<?php echo $router->generate('logout'); ?>" class="btn"> logout </a>
            <a href="<?php echo $router->generate('createpost') ?>" class="btn">Create post</a>
        <?php } else {?>
            <a href="<?php echo $router->generate('login'); ?>" class="btn">Login</a>
            <a href="<?php echo $router->generate('register')?>" class="btn">Register</a></p>
            <?php }?>
        <h1>Les derniers articles</h1>
        <?php foreach ($datas as $data): ?>
            <article>
                <h2><?php echo $data->post->getTitle(); ?></h2>
                <p><?php echo $data->post->getDescription(); ?></p>
                <p><?php echo $data->post->getContent(); ?></p>
                <p><?php echo $data->username; ?></p>
                <p><?php echo $data->post->getPublished_date()->format('m/d/Y'); ?></p>
                <a href="<?php echo $router->generate('readPost', ['id' => $data->post->getId_post()]); ?>" class="btn">Read</a>
            </article>

        <?php endforeach; ?>
    </section>
</body>
</html>