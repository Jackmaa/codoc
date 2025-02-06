<?php
class ControllerUser {
    public function login() {
        $title = 'Login | codoc';        // Set the title of the homepage
        require_once './view/login.php'; // Include the homepage view
                                         // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if the email and password are set
            if (! empty($_POST['email']) && ! empty($_POST['password'])) {
                // Create an instance of ModelUser
                $model = new ModelUser();
                // Fetch the user by email
                $user = $model->getUserByEmail($_POST['email']);
                var_dump($user);
                // Check if the user exists and the password is correct

                // Add cost to the password verify method
                if ($user && $_POST['password'] === $user->getPassword()) {
                    session_start();
                    // Set the user ID in the session
                    $_SESSION['id_user'] = $user->getId_user();
                    var_dump($_SESSION);
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
}