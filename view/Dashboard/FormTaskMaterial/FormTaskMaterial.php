<?php

 require "../vendor/autoload.php";


 use App\Controller\Dashboard\FormTaskMaterial\FormTaskMaterial;
 use includes\session;

   session::CheckSession();
   $listInsert = new FormTaskMaterial();

/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $listInsert->TaskRegistrationEquipment($_POST);}
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
 
 
 <form class="form-style" id="form" data-create-account-form method="POST">

<select class="css-select" id="NameCustom" name="NameCustom">
<option>Choix client</option>
<?php $allList1 = $listInsert->ListNameCustom();
if ($allList1) {
    foreach ($allList1 as  $value) {
     ?>
<option value="<?php echo $value['NameCustom']; ?>"  ><?php echo $value['NameCustom']; ?></option>
<?php }} ?>
</select><br>
<input type="text" class="css-input" id="Equipment" name="Equipment" placeholder="Entrez le matériel concerné ici"  required><br>
<input type="text" class="css-input" id="Marque" name="Marque"  placeholder="Entrez la marque" required><br>
<input type="text" class="css-input" id="Modele" name="Modele"  placeholder="Entrez le modele" required><br>
<div id="remove"><div id="message"></div></div>
<button id="submit" class="btn-register" name="register">submit</button>

</form>

</div>


</div>                     
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>


</footer>