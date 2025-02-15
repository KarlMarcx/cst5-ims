<?php
session_start();
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) && !empty($password)) {
        $_SESSION['user'] = [
            'email' => $email , 
            'password' => $password
        ];
        if ($_SESSION['user']['email'] === 'admin@gmail.com' && $_SESSION['user']['password'] === 'admin') {
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: employee-view.php");
            exit();
        }
    } else {
        $error_message = "Please fill in both email and password.";
    }
}
?>

<div class="login-container">
    <div class="login-box">
        <div class="avatar">
            <img width="40" height="40" src="https://img.icons8.com/office/40/user.png" alt="user" />
        </div>
        <form method="POST" action="">
            <input type="text" placeholder="Email ID" name="email">
            <input type="password" placeholder="Password" name="password">
            <div class="remember-me">
                <label><input type="checkbox" name="remember">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button class="login-btn" name="login-btn">LOGIN</button>
            <?php if (!empty($error_message)): ?>
                <div class="error-message">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            <div class="sign-up-option-container">
                <h5 class>Don't have an account?</h5>
                <a href="sign-up.php">Sign up</a>
            </div>
        </form>
    </div>
</div>