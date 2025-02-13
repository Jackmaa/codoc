<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="./public/assets/img/favicon.svg">
    <title>Create | codoc</title>
</head>
<body>
    <?php if (isset($error)): ?>
        <p><?php echo $error;?></p>
        <?php endif?>
        <div class="div_form">
            <form action="/codoc/post/create" method="POST" class="post_codoc">
                <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']?>">
                <div>
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" required>
                </div>
                <div>
                    <label for="content">Content</label>
                    <textarea name="content" id="content" required></textarea>
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" required>
                </div>
                <div>
                    <a href="<?php echo $router->generate('home')?>">Retour</a>
                    <button type="submit" name="submit" value="codoc" class="btn">Codoc</button>
                </div>
            </form>
        </div>
    
</body>
</html>