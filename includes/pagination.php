<?php

require "../vendor/autoload.php";


use App\Controller\formTask\FormTask;
use includes\session;

session::init();
$list = new FormTask();



$_POST = json_decode(file_get_contents('php://input'), true);
$user_id_num = session::get('user_id');;

if (isset($_GET['page']) && !empty($_GET['page'])) {
  $currenPage = (int) strip_tags($_GET['page']);
}else{
  $currenPage = 1;
}
$allList1 = $list->List_Task2($user_id_num);    
if($allList1){

header('Content-type:application/json');
echo json_encode(array_map(function($allList){
    return[ 
        "Nom"=>$allList['Nom'],
        "Equipment"=>$allList['Equipment'],
        "NameCustomer"=>$allList['NameCustomer'],
        "Subjects"=>$allList['Subjects'],
        "Detail"=>$allList['Detail'],
        "Observation"=>$allList['Observation'],
        "Verdicts"=>$allList['Verdicts'],
        "Btn_modif"=>$allList['Btn_modif'],
        "Btn_Sup"=>$allList['Btn_Sup'],
        "user_id_num"=>$allList['user_id_num'],
        "Id_task"=>$allList['Id_task']
    ];

  },$allList1));

} else {
echo json_encode('Pas de savegarde');
} 