<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\Dashboard\EditTaskForm\EditTaskForm;

session::CheckSession();

$listUpdate = new EditTaskForm();
/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Update'])) {$register = $listUpdate->UpdateTaskRegistration($_POST);}
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

 <form class="form-second-style" id="form" data-create-account-form method="POST">

<input type="text" id="Nom" class="css-input" name="Nom" value="<?php echo $_POST['Nom']; ?>" required>
<select class="css-select" name="Equipment" required>
<?php $allList = $listUpdate->ListMaterial();if ($allList) {foreach ($allList as  $value) {?>
<option value="<?php echo $value['Equipment']; ?>"><?php echo $value['Equipment']; ?></option>
<?php }} ?>
<option value="<?php echo $_POST['Equipment']; ?>" selected><?php echo $_POST['Equipment']; ?></option>
</select>
<select class="css-select" name="NameCustomer" required>
<?php $allList1 = $listUpdate->ListNameCustom();
if ($allList1) {
    foreach ($allList1 as  $value) {
     ?>
<option value="<?php echo $value['NameCustom']; ?>"><?php echo $value['NameCustom']; ?></option>
<?php }} ?>
<option value="<?php echo $_POST['NameCustomer']; ?>" selected><?php echo $_POST['NameCustomer']; ?></option>
</select>
<input type="text" id="Subjects" class="css-input" name="Subjects" value="<?php echo $_POST['Subjects']; ?>" required>
<textarea class="textarea"  rows="4" name="Detail" required><?php echo $_POST['Detail']; ?></textarea>
<textarea class="textarea"  rows="4" name="Observation"  required><?php echo $_POST['Observation']; ?></textarea>
<textarea class="textarea"  rows="4" name="Verdicts"  required><?php echo $_POST['Verdicts']; ?></textarea>

<input type="hidden" name="user_id_num" value="<?php echo Session::get('user_id'); ?>" required>
<input type="hidden" name="Id_task" value="<?php echo $_POST['Id_task']; ?>" required>

<input class="btn-register" type="submit" value="Ajouter"  name="Update">

</form>

</div>                     
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    
</footer>