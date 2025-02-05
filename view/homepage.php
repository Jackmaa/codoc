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
            <h2><?= $data->getTitle(); ?></h2>
            <p><?= $data->getDescription(); ?></p>
            <p><?= $data->getContent();?></p>
            <p><?= $data->getPublished_date();?></p>
        </article>
    <?php endforeach; ?>
</body>
</html>