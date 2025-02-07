<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./public/assets/img/light.svg">
    <title>Codoc | Register An Account</title>

    <form action="/codoc/register" method="POST">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_verify">Confirm Password:</label>
            <input type="password" id="password_verify" name="password_verify" required>
        <div>
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</head>
<body>

</body>
</html>