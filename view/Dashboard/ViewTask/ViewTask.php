<?php

require "../vendor/autoload.php";

use includes\session;
use App\Controller\Dashboard\ViewTask\ViewTask;


$SelectInsert = new ViewTask;

session::CheckSession();


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['user_id_num']) && isset($_GET['Id_task'])) {  
  $SelectInsert->BtnSupTask($_GET);
};
?> 

<title>Liste des interventions</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash" >
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
<table class="blueTable" cellspacing="0">
        <thead>
        <tr>
        <th><a href="TaskForm" style="color: #90242D;">Ajouter</a>
        </th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
        </tr>
        <tr>
            <th>Nom intervenant</th>
            <th >Materiel</th>
            <th >Nom client</th>
            <th >Sujet d'intervention</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th >Heure début</th>
            <th >Heure fin</th>
            <th>Détail</th>
            <th>Observation(s)</th>
            <th>Verdicts</th>
            <th >Action</th>           
        </tr>
        </thead> 
        <tbody>
            <?php $allList = $SelectInsert->List_Task();

if ($allList) {
      foreach ($allList as  $value) { 
       ?>
       <tr>
   <td class="paginated-list" ><?php echo $value['Nom']; ?></td>
   <td class="paginated-list" ><?php echo $value['Equipment']; ?></td>
   <td class="paginated-list" ><?php echo $value['NameCustomer']; ?></td>
   <td class="paginated-list" ><?php echo $value['Subjects']; ?></td>
   <td class="paginated-list" ><?php echo $value['startDate']; ?></td>
   <td class="paginated-list" ><?php echo $value['EndDate']; ?></td>
   <td class="paginated-list" ><?php echo $value['hourStart']; ?></td>
   <td class="paginated-list" ><?php echo $value['hourEnd']; ?></td>
   <td class="paginated-list td-textearea"><?php echo $value['Detail']; ?></td>
   <td class="paginated-list td-textearea"><?php echo $value['Observation']; ?></td>
   <td class="paginated-list td-textearea"><?php echo $value['Verdicts']; ?></td>


   <td id="show_content<?php echo $value['Id_task']; ?>" onclick="handleClick('#show_content<?php echo $value['Id_task']; ?>')" class="paginated-list">
   <i class="fa-solid fa-ellipsis-vertical"></i>
    
 
 
     <div class="btn-action" style="display: none">
     
    <?php if ($value['Btn_modif'] == 'Disable') {?>
    <?php }else {?>
    <form data-create-account-form method="POST" class="btn-link-Edit" action="../EditTaskForm">
    <input type="hidden" name="Nom" value="<?php echo $value['Nom']; ?>">
    <input type="hidden" name="Equipment" value="<?php echo $value['Equipment']; ?>">
    <input type="hidden" name="NameCustomer" value="<?php echo $value['NameCustomer']; ?>">
    <input type="hidden" name="Subjects" value="<?php echo $value['Subjects']; ?>">
    <input type="hidden" name="startDate" value="<?php echo $value['startDate']; ?>">
    <input type="hidden" name="EndDate" value="<?php echo $value['EndDate']; ?>">
    <input type="hidden" name="hourStart" value="<?php echo $value['hourStart']; ?>">
    <input type="hidden" name="hourEnd" value="<?php echo $value['hourEnd']; ?>">
    <input type="hidden" name="Detail" value="<?php echo $value['Detail']; ?>">
    <input type="hidden" name="Observation" value="<?php echo $value['Observation']; ?>">
    <input type="hidden" name="Verdicts" value="<?php echo $value['Verdicts']; ?>">
    <input type="hidden" name="user_id_num" value="<?php echo $value['user_id_num']?>">
    <input type="hidden" name="Id_task" value="<?php echo $value['Id_task']?>">
    <button type="submit"  class="btn-link-action"> Modifier</button>
    </form >
    <?php }?>

   <?php if ($value['Btn_Sup'] == 'Disable') {?>
   <?php }else {?>
    <a class="btn-link-action" href="?user_id_num=<?php echo $value['user_id_num']?>&Id_task=<?php echo $value['Id_task']?>"> Supprimer</a>
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

