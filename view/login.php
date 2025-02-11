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
    <?php if (isset($error)): ?>
        <p><?php echo $error ?></p>
    <?php endif?>
    <div class="container">
    <div class="form-box login">
        <form action="/codoc/login" method="POST">
            <h1>Login</h1>
            <div class="input-box">
            <input type="email" id="email" name="email" required placeholder="example@codoc.com" aria-errormessage='email-error'>
            </div>
            <div class="input-box">
            <input type="password" id="password" name="password" required placeholder="********" aria-errormessage='password-error'>
            </div>
            <button type="submit" class="formbtn">Login</button>
        </form>
    </div>

    <div class="form-box register">
        <form action="/codoc/register" method="POST">
            <h1>Registration</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
            <input type="email" id="email" name="email" required placeholder="example@codoc.com" aria-errormessage='email-error'>
            </div>
            <div class="input-box">
            <input type="password" id="password" name="password" required placeholder="********" aria-errormessage='password-error'>
            </div>
            <div class="input-box">
            <input type="password" id="passwordpassword_verify" name="password_verify" required placeholder="********" aria-errormessage='password-error'>
            </div>
            <button type="submit" class="formbtn">Register</button>
        </form>
    </div>

    <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h1>Hello, Welcome!</h1>
            <p>Don't have an account?</p>
            <button class="formbtn register-btn">Register</button>
        </div>

        <div class="toggle-panel toggle-right">
            <h1>Welcome Back!</h1>
            <p>Already have an account?</p>
            <button class="formbtn login-btn">Login</button>
        </div>
    </div>
</div>
    <script src="./public/assets/js/login.js"></script>
</body>
</html>