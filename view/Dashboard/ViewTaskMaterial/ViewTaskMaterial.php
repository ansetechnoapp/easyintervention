<?php

require "../vendor/autoload.php";


use includes\session;
use App\Controller\Dashboard\ViewTaskMaterial\ViewTaskMaterial;


$SelectDelectInsert= new ViewTaskMaterial();

session::CheckSession();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['NameCustom'] ) && isset($_GET['Equipment'] )) {  $SelectDelectInsert->btnSupTaskMaterial($_GET);}
?>


<title>liste des matériels</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash">
<?php include "../includes/dashboardNav.php";?>
</header>

<section class="section-dash">
<div class="header-dash">

<div class="Titre">
<h3>Liste des matériels</h3>
<p><a href="ViewTask">Acceuil</a>/Matériels</p>
</div>
<?php include "../includes/header-dash.php";?> 
</div>
<div class="sect-1">
<table class="blueTable" cellspacing="0">
        <thead>
        <tr>
       <th><a href="../FormTaskMaterial" style="color: #90242D;">Ajouter</a></th><th></th><th></th><th></th><th></th><th></th>
        </tr>
        <tr>
            <th>Nom client</th>
            <th>Materiel</th>
            <th>Marque</th>
            <th>Modele</th>
            <th>Responsable</th>
            <?php $accesAdmin= session::get('roleid');
            if ($accesAdmin === 'admin') { ?>
             <th style="width: 60px;">Action</th>  
              <?php }else {?><?php } ?>          
        </tr>
        </thead>
        <tbody>
            <?php $allList = $SelectDelectInsert->ListMaterial();

if ($allList) {
      foreach ($allList as  $value) {
       ?>
       <tr >
   <td class="paginated-list"><?php echo $value['NameCustom']; ?></td>
   <td class="paginated-list"><?php echo $value['Equipment']; ?></td>
   <td class="paginated-list"><?php echo $value['Marque']; ?></td>
   <td class="paginated-list"><?php echo $value['Modele']; ?></td>
   <td class="paginated-list"><?php echo $value['Responsable']; ?></td>


   <td class="paginated-list">
   <?php if ($accesAdmin === 'admin') {?>
    <button id="clickModal" data-modal=".myModal">supprimer</button>
   <?php }else {?><?php }?>
  </td>

       </tr>
       <div class="modal myModal">
    <div class="container">
        <div class="header">
            <h1>Cette action est irréversible !</h1>
            <button class="close">&times;</button> 
        </div>
        <div class="content">
        Est-ce que vous êtes sûr de vouloir supprimer ce matériel ?
        </div>
        <div class="footer">
        <a class="btn-link-action" href="?NameCustom=<?php echo $value['NameCustom']?>&Equipment=<?php echo $value['Equipment']?>">Supprimer</a>
        <a class="close">Close</a>
        </div>
    </div>
</div>
          <?php }} ?>
            </tbody>
            <tfoot>
        <tr>
        <td colspan="9">

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
