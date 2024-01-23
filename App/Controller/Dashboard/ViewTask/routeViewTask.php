<?php

namespace App\Controller\Dashboard\ViewTask;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeViewTask
{
  public static function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/ViewTask/ViewTask.php', $_route);
  
      return new Response(ob_get_clean());
  }
}