<?php

require "../vendor/autoload.php";

use App\Controller\formTask\FormTask;
use includes\session;



$insert = new FormTask;
session::CheckSession();


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['user_id_num']) && isset($_GET['Id_task'])) {  
  $insert->BtnSupTask($_GET);
};
?>


<title>Titre de la page</title>
</head>
<body>

<div class="container-dash">


<header class="Nav-dash" >
<?php include "../includes/dashboardNav.php";?>
</header>

<section class="section-dash">
<?php include "../includes/header-dash.php";?>
<div class="sect-1">
<table class="blueTable" cellspacing="0">
        <thead>
        <tr>
        <th><a href="../TaskForm" style="color: #90242D;">Ajouter</a></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
        </tr>
        <tr>
            <th>Nom intervenant</th>
            <th>Materiel</th>
            <th>Nom client:</th>
            <th>Sujet d'intervention</th>
            <th>Détail</th>
            <th>Observation(s)</th>
            <th>Verdicts</th>
            <th style="width: 60px;">Action</th>           
        </tr>
        </thead> 
        <tbody id="paginated-list">
            </tbody>
        <tfoot>
        <tr>
        <td colspan="9">
        <div class="links">         
        <a id="prev-button" href="#">&laquo;</a>
        <div style="display: inline-block;" id="setlinksnumberbtn"></div>
        <a id="next-button" href="#">&raquo;</a>
        </div>
        </td>
        </tr>
        </tfoot>
        </table>

</div>                              
 
</section>
<footer class="footer-dash">
<?php include "../includes/footer.php";?>    
</footer>

