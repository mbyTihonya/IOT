<?
session_start();
    if ($_SESSION['user']) {    
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS/global.css">
</head>

<body>
    <div class="wrapper">
        <div class="authorize_window">
            <div class="authorize_window_info">
                <p class="authorize_window_title">Log In</p>
                <form action="vendor/signin.php" method="POST" class="fm_authorize">
                    <input type="text" name="login" id="fm_username-id" placeholder="Username">
                    <input type="password" name="password" id="fm_passwd-id" placeholder="Password">
                    <button type="submit" class="fm_button">Log In</button>
                </form>
                <span class="fm_inner_text"><a href="Reset.html" class="forgot_link fm_link">Forgot password?</a></span>
                <span class="fm_inner_text">No Account? <a href="Reg.php" class="create_account_link fm_link">Create one</a></span>
            </div>
            <img src="IMAGES/AuthGirl.svg" alt="" class="auth_girl">
        </div>
    </div>
</body>

</html>