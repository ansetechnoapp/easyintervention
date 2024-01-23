<?php

namespace App\Controller\Dashboard\Administrator\AddUser;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeAddUser
{
  
  function view(Request $request)
    {
        extract($request->attributes->all(), EXTR_SKIP);
        ob_start();
        include sprintf('../view/Dashboard/Administrator/AddUser/AddUser.php', $_route);
    
        return new Response(ob_get_clean());
    }
}


  