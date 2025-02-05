<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Les derniers articles</h1>
    <?php foreach($datas as $data): ?>
        <article>
            <h2><?= $data->post->getTitle(); ?></h2>
            <p><?= $data->post->getDescription(); ?></p>
            <p><?= $data->post->getContent();?></p>
            <p><?= $data->username; ?></p>
            <p><?= $data->post->getPublished_date();?></p>
        </article>
    <?php endforeach; ?>
</body>
</html>