<?php

require "../vendor/autoload.php";

use App\Controller\passwordUpdate\passwordUpdate;



$insert = new passwordUpdate();
/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $insert->passwordUpdate($_POST);}
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
<?php include "../includes/dashboardHearder.php";?>



</header>
<section>
  <h1>Titre</h1>

  <form data-create-account-form method="POST">

  <label for="password">nouveau mot de passe:</label><br>

  <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe ici." required><br>

  <label for="confPassword">Confirmez votre mot de passe:</label><br>

  <input type="password" id="confPassword" name="confPassword" placeholder="Entrez de nouveau votre mot de passe nom ici." required><br>

  <input type="hidden" id="email" name="email" value="<?php echo $_GET['update'] ?>" required><br>

  <input type="submit" value="Submit" name="register">
  
</form>
<!-- <a href="#">Changer votre email</a> -->



<p>Parapgraphe</p>

  <div></div>
</section>
  <footer>
  <?php include "../includes/footer.php";?>    
</footer>