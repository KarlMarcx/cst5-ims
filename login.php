<?php

session_start();

$dsn = "mysql:host=localhost;port=3306;dbname=cst5;charset=utf8mb4";
$pdo = new PDO($dsn, "root", '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $statement->execute(['email' => $email]);
        $user = $statement->fetch();

        if ($user && $user['password'] === $password) {
            $_SESSION['user'] = $user; 

            if ($user['role'] === 'Admin') {
                header("Location: dashboard.php");
                exit();
            } else if ($user['role'] === 'User') {
                header("Location: employee-view.php");
                exit();
            }
        } else {
            $error_message = "Invalid email or password.";
        }
    }
}
?>

<div class="login-container">
    <div class="login-box">
        <div class="avatar">
            <img width="40" height="40" src="https://img.icons8.com/office/40/user.png" alt="user" />
        </div>
        <form method="POST" action="index.php">
            <input type="text" placeholder="Email ID" name="email">
            <input type="password" placeholder="Password" name="password">
            <?php if (!empty($error_message)): ?>
                <p style="color:red; font-size: 10px">
                    <?php echo $error_message; ?>
                </p>
            <?php endif; ?>
            <div class="remember-me">
                <label><input type="checkbox" name="remember">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button class="login-btn" name="login-btn">Log In</button>
            <div class="sign-up-container">
                <h5 class="sign-up-message">Don't have an account?</h5>
                <a href="sign-up.php">Sign up</a>
            </div>
        </form>
    </div>
</div>