<?php

namespace App\Controller\passwordUpdate;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routePasswordUpdate
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/passwordUpdate/passwordUpdate.php', $_route);
  
      return new Response(ob_get_clean());
  }
}