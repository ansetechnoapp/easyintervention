<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\Dashboard\Administrator\ViewTaskAdmin\ViewTaskAdmin;

$list = new ViewTaskAdmin;
session::CheckSession();
session::CheckLoginAdmin();
?>


<title>Toutes la liste des interventions</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash">
    
<?php include "../includes/dashboardNav.php";?>
</header>

<section class="section-dash">

<div class="header-dash">

<div class="Titre">
<h3>Interventions effectuées pas tous les utilisateurs</h3>
<p><a href="ViewTask">Acceuil</a>/Toutes les interventions</p>
</div>
<?php include "../includes/header-dash.php";?> 
</div>
<div class="sect-1">
<table class="blueTable" cellspacing="0">
   <thead>
   <tr>
       <th><a href="TaskForm" style="color: #90242D;">Ajouter</a></th><th></th><th></th><th></th><th></th><th></th><th></th>      
   </tr>
   <tr>
       <th>Nom de l'intervenant</th> 
       <th>Materiel</th>
       <th>Nom de l'entreprise ou du client</th>
       <th>Sujet d'intervention</th>
       <th>détail ou description</th>
       <th>Observation(s) et Recommandation(s)</th>
       <th>Résultats ou Verdicts</th>
       
   </tr>
   </thead>
   <tbody>
   <?php if (session::get('roleid') == 'admin') {?>
<?php $allList = $list->List_Task_admin();
if ($allList) {
      foreach ($allList as  $value) {
       ?>
       <tr>
   <td class="paginated-list"><?php echo $value['Nom']; ?></td>
   <td class="paginated-list"><?php echo $value['Equipment']; ?></td>
   <td class="paginated-list"><?php echo $value['NameCustomer']; ?></td>
   <td class="paginated-list"><?php echo $value['Subjects']; ?></td>
   <td class="paginated-list td-textearea"><?php echo $value['Detail']; ?></td>
   <td class="paginated-list td-textearea"><?php echo $value['Observation']; ?></td>
   <td class="paginated-list td-textearea"><?php echo $value['Verdicts']; ?></td>
       </tr>
          <?php }} ?>

<?php }?>
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