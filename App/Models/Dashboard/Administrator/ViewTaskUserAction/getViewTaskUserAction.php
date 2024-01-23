<?php

namespace App\Models\Dashboard\Administrator\ViewTaskUserAction;

    trait getViewTaskUserAction
    {
        public function ListUserInfoAll(){
            $sqlQuery = $this->requete("SELECT * FROM user_info ");
            return $sqlQuery->fetchAll();
        }
      
    }
   