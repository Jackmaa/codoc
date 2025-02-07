<?php
class ControllerUser {
    public function login() {
        $title = 'Login | codoc';        // Set the title of the homepage
        require_once './view/login.php'; // Include the homepage view
        $model = new ModelUser();
        $model->isLoggedIn(); // Check if user is already logged in
                              // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if the email and password are set
            if (! empty($_POST['email']) && ! empty($_POST['password'])) {
                // Fetch the user by email
                $user = $model->getUserByEmail($_POST['email']);
                // Check if the user exists and the password is correct

                // Add cost to the password verify method
                if ($user && password_verify($_POST['password'], $user->getPassword())) {
                    // Set the user ID in the session
                    $_SESSION['id_user'] = $user->getId_user();
                    $_SESSION['name']    = $user->getUsername();
                    header('Location: /codoc'); // Redirect to the homepage
                    exit;
                } else {
                    // Display an error message
                    echo 'Invalid email or password.';
                    require_once './view/login.php';
                }
            } else {
                // Display an error message
                $error = 'Email and password are required.';
                // Redirect to the login view
                require_once './view/login.php';
            }
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: /codoc');
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (! empty($_POST['email']) && ! empty($_POST['password']) && ! empty($_POST['password_verify'])) {
                if ($_POST['password'] === $_POST['password_verify']) {
                    $model = new ModelUser();
                   if( $model->checkUserMail($_POST['email']) && $model->checkUserName($_POST['username'])){
                        $model->createUser($_POST['username'], $_POST['email'], $_POST['password']);
                   }else{
                    echo "Email or username is already taken.";
                   }  
                } else {
                    echo 'Passwords do not match.';
                }
            } else {
                echo 'Email, password, and password verify are required.';
            }
        } else {
            require_once './view/register.php';
        }
    }
}