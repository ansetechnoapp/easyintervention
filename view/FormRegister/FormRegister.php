<?php

 require "../vendor/autoload.php";

 use includes\session;
 use App\Controller\FormRegister\FormRegister;

   session::CheckLogin();
   $insert = new FormRegister();

/* Méthode pour recevoir et envoyer à UserRegistration
   (Se situant au lien suivant : C:\laragon\www\Easycrud\classes\users_auth.php)
   Les informations entrées dans les inputs 
*/
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {$register = $insert->UserRegistration($_POST);}
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


<a href="Form_sign_in.php">Se connecter</a>
</header>
<section>

  <div class="container">

   <div class="header">
    <h2>Formulaire  d'inscriptioon</h2>
   </div>

  <form data-create-account-form method="POST" id="form">

   <div class="form-control">
   <label for="pseudo">Pseudo:</label><br>
   <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo ici." required>
   <i class="fa-solid fa-circle-check"></i>
   <i class="fa-solid fa-exclamation"></i>
   <div class="error"></div><br>
   </div>

   <div class="form-control">
   <label for="firstName">Prenom:</label><br>
   <input type="text" id="firstName" name="firstName" placeholder="Entrez votre prenom ici." required>
   <i class="fa-solid fa-circle-check"></i>
   <i class="fa-solid fa-exclamation"></i>
   <div class="error"></div><br>
   </div>

   <div class="form-control">
   <label for="lastName">Nom:</label><br>
   <input type="text" id="lastName" name="lastName" placeholder="Entrez votre nom ici." required>
   <i class="fa-solid fa-circle-check"></i>
   <i class="fa-solid fa-exclamation"></i>
   <div class="error"></div><br>
   </div>

   <div class="form-control">
   <label for="email">corriel electronique:</label><br>
   <input type="email" id="email" name="email" placeholder="Entrez votre email ici." required>
   <i class="fa-solid fa-circle-check"></i>
   <i class="fa-solid fa-exclamation"></i>
   <div class="error"></div><br>
   </div>

   <div class="form-control">
   <label for="password">mot de passe:</label><br>
   <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe ici." required>
   <i class="fa-solid fa-circle-check"></i>
   <i class="fa-solid fa-exclamation"></i>
   <div class="error"></div><br>
   </div>

   <div class="form-control">
   <label for="confPassword">Confirmez votre mot de passe:</label><br>
   <input type="password" id="confPassword" name="confPassword" placeholder="Entrez de nouveau votre mot de passe nom ici." required>
   <i class="fa-solid fa-circle-check"></i>
   <i class="fa-solid fa-exclamation"></i>
   <div class="error"></div><br>
   </div>

  
  <button type="submit" name="register"><i class="fa-solid fa-user"></i>S'inscrire</button>
  
</form>

  </div>

<p>Parapgraphe</p>

  <div></div>
</section>
  <footer>
  <?php include "../includes/footer.php";?>    
</footer>