<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./public/assets/img/light.svg">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <title>Codoc | Register An Account</title>

    <h1>Register</h1>
    <form action="/codoc/register" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="example@codoc.com">
            <div class="error" id='name-error' aria-live="polite">Please enter your mail</div>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required placeholder="username">
            <div class="error" id='name-error' aria-live="polite">Please enter your username</div>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="********">
            <div class="error" id='name-error' aria-live="polite">Please enter your password</div>
        </div>
        <div class="form-group">
            <label for="password_verify">Confirm Password:</label>
            <input type="password" id="password_verify" name="password_verify" required placeholder="********">
            <!-- <div class="hint">Repeat your password</div> -->
        <div>
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</head>
<body>

</body>
</html>