<?php
  session_start();
$error_message = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $_SESSION['user']=['email'=>$_POST['email'], 'password'=>$_POST['password']];
         header("Location: dashboard.php");
         exit();
    }
    else{
        $error_message = "Please fill in both email and password.";   
    }
}
?>


<div class="login-container">
    <div class="login-box">
        <div class="avatar">
        <img width="40" height="40" src="https://img.icons8.com/office/40/user.png" alt="user"/>
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
        </form>
    </div>
    </div>





