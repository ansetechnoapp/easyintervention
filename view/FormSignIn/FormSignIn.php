<?php

require "../vendor/autoload.php";


use includes\session;



use App\Controller\FormSignIn\FormSignIn;


session::CheckLogin();


$users = new FormSignIn();  
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {$userLog = $users->UserSign_in($_POST);};
if (isset($userLog)) { echo $userLog;};
?>
<title>connexion</title>
</head>
<body>

<div class="container"> 

<header class="header">
        <div class="flex-logo">
              
              <a class="" href="/Easycrudsymphony/public/index.php"><img src="assets/img/Logo EasySoft sans le fond blanc.png" alt="Easysoft"></a>
              <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fas fa-bars"></i>
              </button> -->
              </div>
<nav class="flex-Navbar">
                    <ul class="list-nav">
                        <li class=""><a class="nav-link btn" href="sign-in">Acceuil</a></li>
                        <!-- <li class=""><a class="nav-link" href="register">S'inscrire</a></li> -->
                    </ul>       
        </nav>
</header>
<section class="section">
     
                                     
                                     <form class="form" id="" data-create-account-form method="POST">
                                     <h3 class="item">Connexion</h3>
                                     <h6 class="item">Entrer vos informations pour vous connecté</h6>       
                                     <input class="item css-input" type="text" id="email" name="emailPseudo" placeholder="Email ou pseudo">
                                     <input class="item css-input" type="password" id="password" name="password" placeholder="Mot de passe">
                                     <input class="item btn-connexion" type="submit" value="connexion" name="login">
                                     <div class="item"><a href="password">Mot de passe oublié</a></div>
                                                                                               
                                     </form>                
                               
 
</section>

<footer class="footer">
 <?php include "../includes/footer.php";?>    
</footer>
