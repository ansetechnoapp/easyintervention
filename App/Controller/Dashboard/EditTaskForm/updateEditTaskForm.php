<?php

namespace App\Controller\Dashboard\EditTaskForm;

trait updateEditTaskForm
{
    public function UpdateTaskRegistration($data){
        $NameUser = htmlspecialchars(trim(strip_tags($data['Nom'])));
        $Equipment = htmlspecialchars(trim(strip_tags($data['Equipment'])));
        $NameCustomer = htmlspecialchars(trim(strip_tags($data['NameCustomer'])));
        $Subjects = htmlspecialchars(trim(strip_tags($data['Subjects'])));
        $Detail = htmlspecialchars(trim(strip_tags($data['Detail'])));
        $Observation = htmlspecialchars(trim(strip_tags($data['Observation'])));
        $Verdicts = htmlspecialchars(trim(strip_tags($data['Verdicts'])));
        $Id_task = htmlspecialchars(trim(strip_tags($data['Id_task'])));
        $user_id_num = htmlspecialchars(trim(strip_tags($data['user_id_num'])));
        if ( $NameUser == "" || $Equipment == "" || $NameCustomer == "" || $Subjects == "" || $Detail == "" || $Observation == "" || $Verdicts == "") {
          echo " S'il vous plaît, remplissez tous les champs.";
        }elseif (strlen($NameUser) < 9) {
          echo " S'il vous plaît, votre nom complet doit être plus de 9 caractères.";
        }elseif (strlen($NameCustomer) < 1) {
          echo " S'il vous plaît, l'appellation du client doit contenir au moins 2 caractères.";
        }elseif (strlen($Equipment) < 1) {
          echo " S'il vous plaît, l'appellation du client doit contenir au moins 2 caractères.";
        }elseif (strlen($Subjects) < 5 && ($Detail) < 5 && ($Observation) < 5 && ($Verdicts) < 5) {
          echo " S'il vous plaît, les champs Sujet d'intervention, Détail ou description, Observation (s) et Recommandation (s), Résultats ou Verdicts doivent être
          Supérieur à 5 caractères.";
        }else {
          $result = $this-> setUpdateTaskRegistration($NameUser,$Equipment,$NameCustomer,$Subjects,$Detail,$Id_task,$Observation,$Verdicts,$user_id_num);
        if ($result) {
          echo "<script>location.href='ViewTask';</script>";
        } else {
        echo "Erreur : " . $result . "<br>";
        } 
        }
      }
    
}