<?php

namespace App\Controller\Dashboard\Administrator\ViewTaskAdmin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

  trait routeViewTaskAdmin
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/Administrator/ViewTaskAdmin/ViewTaskAdmin.php', $_route);
  
      return new Response(ob_get_clean());
  }
}


  


