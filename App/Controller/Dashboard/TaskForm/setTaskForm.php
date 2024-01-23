<?php

namespace App\Controller\Dashboard\TaskForm;

trait setTaskForm
{
  public function TaskRegistration($data){

    
    $NameUser = htmlspecialchars(trim(strip_tags($data['Nom'])));
    $Equipment = htmlspecialchars(trim(strip_tags($data['Equipment'])));
    $NameCustomer = htmlspecialchars(trim(strip_tags($data['NameCustomer'])));
    $Subjects = htmlspecialchars(trim(strip_tags($data['Subjects'])));
    $startDate = htmlspecialchars(trim(strip_tags($data['startDate'])));
    $EndDate = htmlspecialchars(trim(strip_tags($data['EndDate'])));
    $hourStart = htmlspecialchars(trim(strip_tags($data['hourStart'])));
    $hourEnd = htmlspecialchars(trim(strip_tags($data['hourEnd'])));
    $Detail = htmlspecialchars(trim(strip_tags($data['Detail'])));
    $Observation = htmlspecialchars(trim(strip_tags($data['Observation'])));
    $Verdicts = htmlspecialchars(trim(strip_tags($data['Verdicts'])));
    $role = htmlspecialchars(trim(strip_tags($data['role'])));
    $user_id_num = htmlspecialchars(trim(strip_tags($data['user_id_num'])));
    //  dd($NameUser,$Equipment,$NameCustomer,$Subjects,$startDate,$EndDate,$hourStart,$hourEnd,$Detail,$Observation,$Verdicts,$role,$user_id_num);

 
    if ( $NameUser == "" || $Equipment == "" || $NameCustomer == "" || $Subjects == "" || $Detail == "" || $Observation == "" || $Verdicts == "") {
      echo " S'il vous plaît, remplissez tous les champs.";
    }elseif (strlen($NameUser) < 1) {
      echo " S'il vous plaît, votre nom complet doit être plus de 9 caractères.";
    }elseif (strlen($NameCustomer) < 1) {
      echo " S'il vous plaît, l'appellation du client doit contenir au moins 2 caractères.";
    }elseif (strlen($Equipment) < 1) {
      echo " S'il vous plaît, l'appellation du client doit contenir au moins 2 caractères.";
    }elseif (strlen($Subjects) < 2 && strlen($Detail) < 2 && strlen($Detail) < 2 && strlen($Observation) < 2 && strlen($Verdicts) < 2) {
      echo " S'il vous plaît, les champs Sujet d'intervention, Détail ou description, Observation (s) et Recommandation (s), Résultats ou Verdicts doivent être
      Supérieur à 3 caractères.";
    }else {
    $result = $this->setTaskRegistration($NameUser,$Equipment,$NameCustomer,$Subjects,$startDate,$EndDate,$hourStart,$hourEnd,$Detail,$Observation,$Verdicts,$role,$user_id_num);
    if ($result) {
      echo "<script>location.href='ViewTask';</script>";
  } else {
  echo "Erreur : " . $result . "<br>";
  }

    }
  }
  
}