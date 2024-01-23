<?php

namespace App\Controller\Dashboard\UserUpdateAccount;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeUserUpdateAccount
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/UserUpdateAccount/UserUpdateAccount.php', $_route);
  
      return new Response(ob_get_clean());
  }
}