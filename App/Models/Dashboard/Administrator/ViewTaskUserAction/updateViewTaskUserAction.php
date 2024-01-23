<?php

namespace App\Models\Dashboard\Administrator\ViewTaskUserAction;

    trait updateViewTaskUserAction
{
    public function UpdateUserStatus($data){
        $status = htmlspecialchars(trim(strip_tags($data['status'])));
        $user_id  = htmlspecialchars(trim(strip_tags($data['user_id'])));
    
        $data = [
          'status' => $status,
          'user_id' => $user_id,
      ];
    
       $this->requete("UPDATE user_info SET status = :status WHERE user_id = :user_id ",$data);
    
      }
  
}



    
