<?php


use Symfony\Component\Routing;


$routes = new Routing\RouteCollection();
$routes->add('Home', new Routing\Route('/.{name}', [
    'name' => 'wold',
    '_controller' => 'App\Controller\HomeController::view'
]));




$routes->add('FormSignIn', new Routing\Route('/sign-in', [

    '_controller' => 'App\Controller\FormSignIn\FormSignIn::view'
]));

$routes->add('FormRegister', new Routing\Route('/register', [

    '_controller' => 'App\Controller\FormRegister\FormRegister::view'
]));
$routes->add('passwordForgot', new Routing\Route('/password', [

    '_controller' => 'App\Controller\passwordForgot\passwordForgot::view'
]));
$routes->add('passwordUpdate', new Routing\Route('/passUpdate', [
 
    '_controller' => 'App\Controller\passwordUpdate\passwordUpdate::view'
]));

$routes->add('', new Routing\Route('/out/{Sign_out}', [
    'Sign_out' => 'out',
    '_controller' => 'App\Controller\signOut\Out::view'
]));

$routes->add('ViewTask', new Routing\Route('/ViewTask', [
    
    '_controller' => 'App\Controller\Dashboard\ViewTask\ViewTask::view'
]));
$routes->add('ViewTaskMaterial', new Routing\Route('/ViewTaskMaterial', [

    '_controller' => 'App\Controller\Dashboard\ViewTaskMaterial\ViewTaskMaterial::view'
]));
$routes->add('ViewTaskNameCustom', new Routing\Route('/ViewTaskNameCustom', [

    '_controller' => 'App\Controller\Dashboard\ViewTaskNameCustom\ViewTaskNameCustom::view'
]));

$routes->add('UserUpdateAccount', new Routing\Route('/UserUpdateAccount', [

    '_controller' => 'App\Controller\Dashboard\UserUpdateAccount\UserUpdateAccount::view'
]));
$routes->add('TaskForm', new Routing\Route('/TaskForm', [

    '_controller' => 'App\Controller\Dashboard\TaskForm\TaskForm::view'
]));
$routes->add('EditTaskForm', new Routing\Route('/EditTaskForm', [

    '_controller' => 'App\Controller\Dashboard\EditTaskForm\EditTaskForm::view'
]));

$routes->add('FormTaskMaterial', new Routing\Route('/FormTaskMaterial', [

    '_controller' => 'App\Controller\Dashboard\FormTaskMaterial\FormTaskMaterial::view'
]));
$routes->add('FormTaskNameCustom', new Routing\Route('/FormTaskNameCustom', [

    '_controller' => 'App\Controller\Dashboard\FormTaskNameCustom\FormTaskNameCustom::view'
]));

$routes->add('AddUser', new Routing\Route('/AddUser', [

    '_controller' => 'App\Controller\Dashboard\Administrator\AddUser\AddUser::view'
]));
$routes->add('ListUser', new Routing\Route('/ListUser', [

    '_controller' => 'App\Controller\Dashboard\Administrator\ListUser\ListUser::view'
]));
$routes->add('ViewTaskAdmin', new Routing\Route('/ViewTaskAdmin', [
    
    '_controller' => 'App\Controller\Dashboard\Administrator\ViewTaskAdmin\ViewTaskAdmin::view'
]));
$routes->add('ViewTaskUserAction', new Routing\Route('/ViewTaskUserAction', [
    
    '_controller' => 'App\Controller\Dashboard\Administrator\ViewTaskUserAction\ViewTaskUserAction::view'
]));



return $routes;