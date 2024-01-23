<?php

namespace App\Controller\Dashboard\ViewTaskNameCustom;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeViewTaskNameCustom
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/ViewTaskNameCustom/ViewTaskNameCustom.php', $_route);
  
      return new Response(ob_get_clean());
  }
}