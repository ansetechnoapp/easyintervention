<?php

require "../vendor/autoload.php";

use App\Controller\material\Material;

$listMaterial = new Material();
$_POST = json_decode(file_get_contents('php://input'), true);
$NameCustomer = htmlspecialchars(trim($_POST['NameCustom']));
$Equipment = htmlspecialchars(trim($_POST['Equipment']));
if($Equipment != '' && $NameCustomer!= ''){
    
        $allList1 = $listMaterial->ListTaskFormForMaterial($NameCustomer,$Equipment);
        
        if($allList1){

            foreach ($allList1 as  $value) {
                echo '<input type="text" id="Responsable" class="css-input" name="Responsable" value="'. $value['Responsable'].'" disabled>';
        }

    }else {
        
        echo '<input type="text" id="Responsable" class="css-input"  value="Ajouter un matériel" disabled>';

    }  
    }