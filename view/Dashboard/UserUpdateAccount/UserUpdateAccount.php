<?php

require "../vendor/autoload.php";


use includes\session;
use App\Controller\Dashboard\UserUpdateAccount\UserUpdateAccount;

$SelectInsert = new UserUpdateAccount();
session::CheckSession();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $SelectInsert->UpdateUserRegistration($_POST);}
if (isset($register)) { echo $register;}
if (isset($_GET['action']) && $_GET['action'] == 'logout') {session::destroy();}; 
?> 
<title>Formulaire de mise a jour de vos informations</title>
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
 <form class="form-second-style" data-create-account-form method="POST">
 <?php $allList = $SelectInsert->ListUserInfo();

if ($allList) {
      foreach ($allList as  $value) {
       ?>
  

  <input type="text" class="css-input" id="pseudo" name="pseudo" value="<?php  echo $value['pseudo']; ?>" placeholder="Identifiant" disabled>

  <input type="text" class="css-input" id="firstName" name="firstName" value="<?php echo $value['firstName']; ?>" placeholder="Prenom" required>

  <input type="text" class="css-input" id="lastName" name="lastName" value="<?php echo $value['lastName']; ?>" placeholder="Nom" required>

  <input type="text" class="css-input" id="email" name="email" value="<?php echo $value['email']; ?>" placeholder="corriel electronique" >

  <input type="date" class="css-input" id="Birthday" name="Birthday" value="<?php echo $value['Birthday']; ?>" placeholder="Date de naissance" required>

  <input type="number" class="css-input" id="mobile" name="mobile" value="<?php echo $value['mobile']; ?>" placeholder="Numéro de téléphone" required>

  <input type="text" class="css-input" id="City" name="City" value="<?php echo $value['City']; ?>" placeholder="Ville">

  <input type="text" class="css-input" id="Country" name="Country" value="<?php echo $value['Country']; ?>" placeholder="Pays">

  <input type="text" class="css-input" id="Company_Name" name="Company_Name" value="<?php echo $value['Company_Name']; ?>" placeholder="Company">

  <input type="text" class="css-input" id="addresse" name="addresse" value="<?php echo $value['addresse']; ?>" placeholder="Addresse(Entrez la description de la localisation de votre lieux de résidence.)">

  <input type="password" class="css-input" id="password" name="password" placeholder="Entrez votre mot de passe ici." required>

  <input type="password" class="css-input" id="confPassword" name="confPassword" placeholder="Entrez de nouveau votre mot de passe nom ici." required>
  <input type="hidden" id="user_id" name="user_id" value="<?php echo session::get('user_id') ?>" >

  <input type="submit" class="btn-register" value="Valider" name="register">
  

<?php }} ?>
</form>
</div>


</div>                     
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    
</footer>