<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\passwordForgot\passwordForgot;

$insert = new passwordForgot();
/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
session::init();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $insert->CheckExistEmailUpdate($_POST);}
if (isset($register)) { echo $register;}
/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
?> 
<title>Titre de la page</title>
</head>
<body>
<header>
<a href="sign-in">Se connecter</a>
<?php include "../includes/dashboardNav.php";?>
</header>
<section>
  <h1>Titre</h1>

  <form data-create-account-form method="POST">

  <label for="email">corriel electronique:</label><br>

  <input type="text" id="email" name="email"  required ><br>

  <input type="submit" value="Submit" name="register">
  
</form>

  <div></div>
</section>
  <footer>
  <?php include "../includes/footer.php";?>    
</footer>