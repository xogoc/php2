<?php
/**
 * Created by PhpStorm.
 * User: xogoc
 * Date: 14.12.2017
 * Time: 15:15
 */

namespace components;


use models\User;

class Auth implements ComponentsInterface
{
  function init()
  {
    if ((!isset($_SESSION['userid']) || !isset($_SESSION['login'])) && isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
        $user = new User();
        $user->auth($_COOKIE['login'], $_COOKIE['password']);
    }
    if ($_SESSION['userid'] && $_SESSION['login']) {
        $app = App::getInstance();
        $app->viewer->addParams([
            'user' => [
                'id'    => $_SESSION['userid'],
                'login' => $_SESSION['login']
            ]
        ]);
    }

  }

}