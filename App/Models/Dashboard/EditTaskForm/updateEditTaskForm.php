<?php

namespace App\Models\Dashboard\EditTaskForm;

trait updateEditTaskForm
{
  public function setUpdateTaskRegistration($NameUser,$Equipment,$NameCustomer,$Subjects,$Detail,$Id_task,$Observation,$Verdicts,$user_id_num){
    $data = [
      'Nom' => $NameUser,
      'Equipment' => $Equipment,
      'NameCustomer' => $NameCustomer,
      'Subjects' => $Subjects,
      'Detail' => $Detail,
      'Id_task' => $Id_task,
      'Observation' => $Observation,
      'Verdicts' => $Verdicts,
      'user_id_num' => $user_id_num,
  ];
    $sqlQuery = $this->requete("UPDATE form_task SET Nom = :Nom, Equipment = :Equipment, NameCustomer = :NameCustomer, Subjects =:Subjects, Detail =:Detail, Observation =:Observation, Verdicts =:Verdicts
                 WHERE user_id_num =:user_id_num AND Id_task =:Id_task",$data);
    return $sqlQuery;   
  }
    
}