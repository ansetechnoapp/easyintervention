<?php

namespace App\Controller\FormSignIn;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeFormSignIn
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/FormSignIn/FormSignIn.php', $_route);
  
      return new Response(ob_get_clean());
  }
}