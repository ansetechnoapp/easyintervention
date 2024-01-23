
<?php

require "../vendor/autoload.php";

use App\Controller\material\Material;


$list = new Material();

     $_POST = json_decode(file_get_contents('php://input'), true);
     $NameCustom = htmlspecialchars(trim($_POST['NameCustom']));
    if($NameCustom != ''){
        
        $allList1 = $list->ListMaterialForNamecustomResponsable($NameCustom);
        
        if($allList1){
            echo '<select id="Responsable" name="Responsable" class="css-select">
            <option>Choix responsable</option>';

            foreach ($allList1 as  $value) {
            echo '  <option value="'. $value['Responsable'].'" >'. $value['Responsable'].'</option>';
        }
        echo '<option value="entrer"  >Entrer une nom</option>
        </select><br>';
    } else {
        echo '<select id="Responsable" name="Responsable" class="css-select">
            <option>Choix responsable</option>
            <option value="entrer"  >Entrer une nom</option>
            </select><br>';
    }  
    }



    