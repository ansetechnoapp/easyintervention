<?php

namespace App\Controller\Dashboard\Administrator\ViewTaskUserAction;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



trait routeViewTaskUserAction
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/Administrator/ViewTaskUserAction/ViewTaskUserAction.php', $_route);
  
      return new Response(ob_get_clean());
  }
}



  
