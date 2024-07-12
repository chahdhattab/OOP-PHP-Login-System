<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="login-system">
    <div class="sign-up"> 
        <h3>SIGN UP</h3>
        <h5>Don't you have an account yet ? sign up here</h5>
        <form action="includes/Signup.inc.php" method="post">
            <input type="text" name="fname" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder=" Repeat Password">
            <input type="text" name="email" placeholder ="E-mail">
            <br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </div>
    
</section>

    
</body>
</html>