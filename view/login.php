<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="./public/assets/img/light.svg">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <p><?php echo $error ?></p>
    <?php endif?>
    <form action="/codoc/login" method="POST">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="submit" value="Login" class="btn">Login</button>
        </div>
    </form>
    <p>Don't have an account? <a href="<?= $router->generate('register') ?>" class="btn">Register</a></p>
</body>
</html>