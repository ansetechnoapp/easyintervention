<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\Dashboard\Administrator\ListUser\ListUser;


$insert_list = new ListUser;
session::CheckSession();
session::CheckLoginAdmin();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Update'])) {$register = $insert_list->UpdateUserStatus($_POST);}
if (isset($register)) { echo $register;}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['Btn_modif']) && isset($_GET['user_id_num'])) {
    $insert_list->BtnModifActionAdmin($_GET);
};
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['Btn_Sup']) && isset($_GET['user_id_num'])) {
    $insert_list->BtnSupActionAdmin($_GET);
};

?> 

<title>Liste des utilisateurs actives</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash">
<?php  if (isset($_POST['pageUser'])) {?>
  <nav>
  <div class="flex-logo">

    <a class="" href="/Easycrudsymphony/public/index.php"><img src="assets/img/Logo EasySoft sans le fond blanc.png" alt="Easysoft"></a>
  </div>

  <div class="flex-menuNavbar">
  <ul class="list-nav">
          <li><a class="nav-link btn" href="ViewTask">Intervention</a></li>
          <li><a class="nav-link btn" href="ViewTaskAdmin">Toute les interventions</a></li>
          <li><a class="nav-link btn" href="ViewTaskMaterial">Matériel</a></li>
          <li><a class="nav-link btn" href="ViewTaskNameCustom">Client</a></li>
          <li><a class="nav-link btn" href="ViewTaskUserAction">Activer ou désactiver liste</a></li>

        </ul>



  </div>
</nav>
</header>

<section class="section-dash">
<div class="header-dash">

<div class="Titre">
<h3>Liste des utilisateurs actives</h3>
<p><a href="ViewTask">Acceuil</a>/Utilisateurs actives</p>
</div>
<?php include "../includes/header-dash.php";?> 
</div>
<div class="sect-1">
<table class="blueTable" cellspacing="0">
      <thead>
      <tr>
        <th><a href="../AddUser" style="color: #90242D;">Ajouter</a>
        </th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
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
        <th>Actions</th>

      </tr>
      </thead>
      <tbody>
      <?php if (session::get('roleid') == 'admin') { ?> <?php } ?>

<?php $allList = $insert_list->listUser();
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
      <td id="show_content<?php echo $value['user_id']; ?>" onclick="handleClick('#show_content<?php echo $value['user_id']; ?>')" class="paginated-list">
      <i class="fa-solid fa-ellipsis-vertical"></i>
      <div class="actionStatus" style="display: none">
      <?php if ($value['status'] == 'Activer') { ?>
        <div class="line">status</div>

        <?php if ($value['roleid'] == 'admin') { ?>



          <form >
            <input type="submit" value="Activer" disabled>
          </form>

              
          <?php } else {?> 


          <form data-create-account-form method="POST" class="btn-link-Edit">
            <input type="hidden" name="status" value="Désactiver">
            <input type="hidden" name="user_id" value="<?php echo $value['user_id']; ?>">
            <input type="submit" value="Activer" name="Update" class="btn-link-action">
          </form>


        <?php } ?>

      <?php } else { ?>

        <div class="line">status</div>

          <form data-create-account-form method="POST" class="btn-link-Edit">
            <input type="hidden" name="status" value="Activer">
            <input type="hidden" name="user_id" value="<?php echo $value['user_id']; ?>">
            <input type="submit" value="Désactiver" name="Update" class="btn-link-action">
          </form>

      <?php } ?>

        <?php if ($value['Btn_modif'] == 'Disable') {?>
          <div class="line">Modifier</div>

            <a href="?Btn_modif=Activer&user_id_num=<?php echo $value['user_id_num']?>"><?php echo $value['Btn_modif']; ?></a>

        <?php } if ($value['Btn_modif'] == 'Activer') {?>
          <div class="line">Modifier</div>
            <a href="?Btn_modif=Disable&user_id_num=<?php echo $value['user_id_num']?>"><?php echo $value['Btn_modif']; ?></a>

        <?php } if ($value['Btn_Sup'] == 'Disable') {?>
          <div class="line">Supprimer</div>
            <a href="?Btn_Sup=Activer&user_id_num=<?php echo $value['user_id_num']?>"><?php echo $value['Btn_Sup']; ?></a>

        <?php } if ($value['Btn_Sup'] == 'Activer') { ?>
          <div class="line">Supprimer</div>
            <a href="?Btn_Sup=Disable&user_id_num=<?php echo $value['user_id_num']?>"><?php echo $value['Btn_Sup']; ?></a>

        <?php }?>
        </div>
        </td>
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

<?php } else {?>
  <script language="javascript" type="text/javascript"> 
window.location.replace("ViewTask");
</script>
  <?php }?>

