<?php

namespace App\Models\Dashboard\TaskForm;

use includes\session;

trait setTaskForm
{
  public function setTaskRegistrationNameCustom($NameCustom,$Mobile,$addresse,$email){
    $user_id_num = session::get('user_id');
    $sqlQuery = $this->requete("INSERT INTO namecustomer (NameCustom,Mobile,addresse,email,user_id_num) 
    VALUES ('$NameCustom','$Mobile','$addresse','$email','$user_id_num')");
    return $sqlQuery;
  }
}