<?php

require "../vendor/autoload.php";


use includes\session;
use App\Controller\Dashboard\ViewTaskNameCustom\ViewTaskNameCustom;


$SelectDelectInsert = new ViewTaskNameCustom();

session::CheckSession();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['NameCustom'])) {  $SelectDelectInsert->btnSupTaskNameCustom($_GET);}
?>


<title>liste des clients</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash">
<?php include "../includes/dashboardNav.php";?>
</header>

<section class="section-dash">
<div class="header-dash">

<div class="Titre">
<h3>Nom de tous les clients</h3>
<p><a href="ViewTask">Acceuil</a>/Nom clients</p>
</div>
<?php include "../includes/header-dash.php";?> 
</div>
<div class="sect-1">
<table class="blueTable" cellspacing="0">
        <thead>

        <tr>
       <th><a href="../FormTaskNameCustom" style="color: #90242D;">Ajouter</a></th><th></th><th></th><th></th><th></th>
        </tr>

        <tr>
            <th>Nom client</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Email</th>
            <?php $accesAdmin= session::get('roleid');
            if ($accesAdmin === 'admin') { ?>
             <th style="width: 60px;">Action</th>  
              <?php }else {?><?php } ?>        
        </tr>
        </thead>
        <tbody>
            <?php $allList = $SelectDelectInsert->ListNameCustom();

if ($allList) {
      foreach ($allList as  $value) {
       ?>
       <tr >
   <td class="paginated-list"><?php echo $value['NameCustom']; ?></td>
   <td class="paginated-list"><?php echo $value['Mobile']; ?></td>
   <td class="paginated-list"><?php echo $value['addresse']; ?></td>
   <td class="paginated-list"><?php echo $value['email']; ?></td>

   <td class="paginated-list">
   <?php if ($accesAdmin === 'admin') {?>
    <button id="clickModal" data-modal=".myModal">supprimer</button>
    <?php }else {?><?php }?>
  </td>

       </tr>
       <div class="modal myModal">
    <div class="container">
        <div class="header">
            <h1>My Modal</h1>
            <button class="close">&times;</button> 
        </div>
        <div class="content">
            Hello World!
        </div>
        <div class="footer">
        <a href="?NameCustom=<?php echo $value['NameCustom']?>"> Supprimer</a>
        <a class="close">Close</a>
        </div>
    </div>
</div>
          <?php }} ?>
            </tbody>
            <tfoot>
        <tr>
        <td colspan="5">

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
<!-- <div id="modal"></div> -->
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    
</footer>
