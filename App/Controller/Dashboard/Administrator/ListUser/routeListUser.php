<?php

namespace App\Controller\Dashboard\Administrator\ListUser;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeListUser
{
  
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/Administrator/ListUser/ListUser.php', $_route);
  
      return new Response(ob_get_clean());
  }
}


  