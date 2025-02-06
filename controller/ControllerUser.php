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
                // Create an instance of ModelUser
                $model = new ModelUser();
                // Fetch the user by email
                $user = $model->getUserByEmail($_POST['email']);
                // Check if the user exists and the password is correct

                // Add cost to the password verify method
                if ($user && $_POST['password'] === $user->getPassword()) {
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
}