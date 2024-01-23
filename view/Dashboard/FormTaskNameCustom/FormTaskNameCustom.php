<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\Dashboard\FormTaskNameCustom\FormTaskNameCustom;



session::CheckSession();

$insert = new FormTaskNameCustom();
/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $insert->TaskRegistrationNameCustom($_POST);}
if (isset($register)) { echo $register;}
/* Méthode pour recevoir et envoyer à UserRegistration
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
  <h2>Formulaire  ajout nom client</h2>
 </div>

 <form class="form-style" data-create-account-form method="POST"> 

<input type="text" id="" class="css-input" name="NameCustom" placeholder="Entrez le Nom client concerné ici." required><br>
<input type="number" id="" class="css-input" name="Mobile" placeholder="Entrez le Mobile concerné ici." pattern="/^[0-9]{10}+$/"  required><br>
<input type="text" id="" class="css-input" name="addresse" placeholder="Entrez l'addresse client concerné ici." required><br>
<input type="email" id="" class="css-input" name="email" placeholder="Entrez l'email client concerné ici." required><br>

<input type="submit" class="btn-register" value="Ajouter" name="register">

</form>

</div>


</div>                     
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    
</footer>