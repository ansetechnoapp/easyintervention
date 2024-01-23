
<?php

require "../vendor/autoload.php";


use App\Controller\material\Material;
use includes\session;

session::init();


$list = new Material();

     $_POST = json_decode(file_get_contents('php://input'), true);
     $NameCustomer = htmlspecialchars(trim($_POST['NameCustom']));
     $user_id_num = session::get('user_id');
    if($NameCustomer != ''){
        
        $allList1 = $list->ListMaterialForNamecustom($NameCustomer);
        
        if($allList1){

        header('Content-type:application/json');
        echo json_encode(array_map(function($allList){
            return[ 
                "value"=>$allList['Equipment']];

          },$allList1));

    } else {
        echo json_encode('Aucune matériel ajouter pour ce client');
    }  
    }