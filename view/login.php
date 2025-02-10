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
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="example@codoc.com" aria-errormessage='email-error'>
            <div class="error" id='name-error' aria-live="polite">Please enter your mail</div>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="********" aria-errormessage='password-error'>
            <div class="error" id='name-error' aria-live="polite">Please enter your password</div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Login">
        </div>
            <p>Don't have an account? <div class="relative"><a href="<?php echo $router->generate('register') ?>" class="btn">Register</a></div></p>
    </form>
</body>
</html>