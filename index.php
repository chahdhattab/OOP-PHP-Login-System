

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index_style.css">

</head>
<body>
<header>
    <div class="navbar">
    <div class="logo">
        <a href="#">LOGO</a>
    </div>
    <ul class="links">
        <li><a href="#acceuil">Acceuil</a></li>
        <li><a href="#acceuil">Services</a></li>
        <li><a href="#acceuil">À propos</a></li>
        <li><a href="#acceuil">Contact</a></li>
    </ul>
    <div class="buttons">
        <a href="#" class="subscribe-button">S'inscrire</a>
        <a href="#" class="login-button">Se connecter</a>
    </div>
    <div class="menu">
        <img style ="height:25px; width:25px; " src="images/more.png" alt="menu">
    </div>
    </div>
    <div class="menu-respo ">
        <ul class="menu-links">
            <li><a href="#acceuil">Acceuil</a></li>
            <li><a href="#acceuil">Services</a></li>
            <li><a href="#acceuil">À propos</a></li>
            <li><a href="#acceuil">Contact</a></li>
        </ul>
        <div class="menu-buttons">
            <a href="#" class="subscribe-button">S'inscrire</a>
            <a href="#" class="login-button">Se connecter</a>
        </div>
    </div>
</header>







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