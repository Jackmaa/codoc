<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <title>Homepage</title>
</head>
<body>
    <section>
        <h1>Les derniers articles</h1>
        <?php foreach ($datas as $data): ?>
            <article>
                <h2><?= $data->post->getTitle(); ?></h2>
                <p><?= $data->post->getDescription(); ?></p>
                <p><?= $data->post->getContent();?></p>
                <p><?= $data->username; ?></p>
                <p><?= $data->post->getPublished_date();?></p>
                <a href="<?= $router->generate('readPost', ['id' => $data->post->getId_post()]); ?>" class="btn">Read</a>
            </article>
        <?php endforeach; ?>
    </section>
</body>
</html>