<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\Dashboard\Administrator\ViewTaskUserAction\ViewTaskUserAction;

$insert_list = new ViewTaskUserAction;
session::CheckSession();
session::CheckLoginAdmin();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Update'])) {$register = $insert_list->UpdateUserStatus($_POST);}
if (isset($register)) { echo $register;}

?>


<title>Listes de tout les utilisateurs</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash">
<?php include "../includes/dashboardNav.php";?>
</header>

<section class="section-dash">
<div class="header-dash">

<div class="Titre">
<h3>Listes de tout les utilisateurs</h3>
<p><a href="ViewTask">Acceuil</a>/Utilisateurs</p>
</div>
<?php include "../includes/header-dash.php";?> 
</div>
<div class="sect-1">
<table class="blueTable" cellspacing="0">
      <thead>
      <tr>
        <th><a href="../AddUser" style="color: #90242D;">Ajouter</a></th><th></th><th></th><th></th><th></th><th></th><th></th>
          <th></th><th></th><th></th><th></th><th></th>
        </tr>
      <tr>
          <th>Pseudo</th>
          <th>Prenom</th>
          <th>Nom</th>
          <th>email</th>
          <th>mobile</th>
          <th>addresse</th>
          <th>Birthday</th>
          <th>City</th>
          <th>Company_Name</th>
          <th>Country</th>
          <th>roleid</th>
          <th>status</th>

      </tr>
      </thead>
      <tbody>
      <?php if (session::get('roleid') == 'admin') { ?> <?php } ?>

<?php $allList = $insert_list->ListUserInfoAll();

if ($allList) {
  foreach ($allList as  $value) {
?>
    <tr>
        <td class="paginated-list"><?php echo $value['pseudo']; ?></td>
        <td class="paginated-list"><?php echo $value['firstName']; ?></td>
        <td class="paginated-list"><?php echo $value['lastName']; ?></td>
        <td class="paginated-list"><?php echo $value['email']; ?></td>
        <td class="paginated-list"><?php echo $value['mobile']; ?></td>
        <td class="paginated-list"><?php echo $value['addresse']; ?></td>
        <td class="paginated-list"><?php echo $value['Birthday']; ?></td>
        <td class="paginated-list"><?php echo $value['City']; ?></td>
        <td class="paginated-list"><?php echo $value['Company_Name']; ?></td>
        <td class="paginated-list"><?php echo $value['Country']; ?></td>
        <td class="paginated-list"><?php echo $value['roleid']; ?></td>




        <?php if ($value['status'] == 'Activer') { ?>

            <?php if ($value['roleid'] == 'admin') { ?>

                <td class="paginated-list">

                    <form >
                        <input type="submit" value="Activer" disabled>
                    </form>

                </td>
            <?php } else {?>
                <td class="paginated-list">

                    <form data-create-account-form method="POST" class="btn-link-Edit">
                        <input type="hidden" name="status" value="Désactiver">
                        <input type="hidden" name="user_id" value="<?php echo $value['user_id']; ?>">
                        <input type="submit" value="Activer" name="Update" class="btn-link-action">
                    </form>

                </td>
            <?php } ?>

        <?php } else { ?>

            <td class="paginated-list">

                <form data-create-account-form method="POST" class="btn-link-Edit">
                    <input type="hidden" name="status" value="Activer">
                    <input type="hidden" name="user_id" value="<?php echo $value['user_id']; ?>">
                    <input type="submit" value="Désactiver" name="Update" class="btn-link-action">
                </form>
            </td>
        <?php } ?>


    </tr>
<?php }} ?>
      </tbody>

      <tfoot>
        <tr>
        <td colspan="12">

        <nav class="pagination-container links">
  <button class="pagination-button links-line" id="prev-button" aria-label="Previous page" title="Previous page">&laquo;</button>
  <div id="pagination-numbers" class="links-line"></div>
  <button class="pagination-button links-line" id="next-button" aria-label="Next page" title="Next page">&raquo;</button>
        </nav>

        </td>
        </tr>
        </tfoot>
      
      


    </table> 
</div>
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    
</footer>
