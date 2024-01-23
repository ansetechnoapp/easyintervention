<?php

 require "../vendor/autoload.php";

 use App\Controller\Dashboard\Administrator\AddUser\AddUser;
 use includes\session;

   session::CheckSession();
   session::CheckLoginAdmin();
   $insert_list = new AddUser();

/* Méthode pour recevoir et envoyer à addAdminUser
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $insert_list->addAdminUser($_POST);}
   if (isset($register)) { echo $register;}
   
/* Méthode pour recevoir et envoyer à addAdminUser
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
?> 
<title>Titre de la page</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash">
<?php include "../includes/dashboardNav.php";?>
</header>

<section class="section-dash">
<div class="header-dash">

<div class="Titre">
<h3>Liste des interventions</h3>
<p><a href="ViewTask">Acceuil</a>/interventions</p>
</div>
<?php include "../includes/header-dash.php";?> 
</div>
<div class="sect-1">
   
<div class="container">

<div class="header">
 <h2>Ajouter un utilisateur</h2>
</div>

<form class="form-style" data-create-account-form method="POST" id="form">

<div class="form-control">
<input type="text" id="pseudo" name="pseudo" class="css-input" placeholder="Pseudo" required><br>
<!-- <i class="fa-solid fa-circle-check"></i>
<i class="fa-solid fa-exclamation"></i> -->
<div class="error"></div><br>
</div>

<div class="form-control">
<input type="password" id="password" name="password" class="css-input" placeholder="mot de passe" required><br>
<!-- <i class="fa-solid fa-circle-check"></i>
<i class="fa-solid fa-exclamation"></i> -->
<div class="error"></div><br>
</div>

<div class="form-control"> 
<input type="password" id="confPassword" name="confPassword" class="css-input" placeholder="Confirmez votre mot de passe" required><br>
<!-- <i class="fa-solid fa-circle-check"></i>
<i class="fa-solid fa-exclamation"></i> -->
<div class="error"></div><br>
</div>


<button type="submit" class="btn-register" name="register"><i class="fa-solid fa-user"></i>Ajouter</button>

</form>

</div>
</div>                     
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    

</footer>