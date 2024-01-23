<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\Dashboard\TaskForm\TaskForm;



session::CheckSession();

$listInsert = new TaskForm();
/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $listInsert->TaskRegistration($_POST);}
if (isset($_GET['register']) && $_GET['register']=='sucess') { echo 'Nouveau enregistrement créé avec succès';}
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

<form class="form-second-style" id="form" data-create-account-form method="POST">
<input type="text" id="Nom" class="css-input" name="Nom" placeholder="Intervenant" required>

<select class="css-select"  name="NameCustomer" id="NameCustomer" data-target="#Equipment">
<option>client</option>
<?php $allList1 = $listInsert->ListNameCustom();
if ($allList1) {
    foreach ($allList1 as  $value) {
     ?>
<option value="<?php echo $value['NameCustom']; ?>"  ><?php echo $value['NameCustom']; ?></option>
<?php }} ?>
</select>

<select id="Equipment" name="Equipment" class="css-select" style="display: none;"></select>

<div id="message2"></div>

<input type="text" id="Subjects" class="css-input" name="Subjects" placeholder="Sujet d'intervention" required>
<input type="text" class="css-input" name="startDate" placeholder="Date début(année-mois-jour)">
<input type="text" class="css-input" name="EndDate" placeholder="Date fin(année-mois-jour)">
<input type="text" class="css-input" name="hourStart" placeholder="Heure début(Heure:minuit:second)">
<input type="text" class="css-input" name="hourEnd" placeholder="Heure fin(Heure:minuit:second)">
<textarea id="" class="textarea"  rows="4" name="Detail"  placeholder="Détail ou description" required></textarea>
<textarea id="" class="textarea"  rows="4" name="Observation"  placeholder="Observation(s) et Recommandation(s)" required></textarea>
<textarea id="" class="textarea"  rows="4" name="Verdicts"  placeholder="Résultats ou Verdicts" required></textarea>
<input type="hidden" class="css-input" name="user_id_num" value="<?php echo Session::get('user_id'); ?>" required>
<input type="hidden" class="css-input" name="role" value="user" required>

<input class="btn-register" type="submit" value="Ajouter" name="register">

</form>
</div>


</div>                     
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    
</footer>