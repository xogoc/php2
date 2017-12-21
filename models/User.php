<?php
/**
 * Created by PhpStorm.
 * User: ball
 * Date: 20.12.2017
 * Time: 21:58
 */

namespace models;


use components\Model;

class User extends Model
{
    public function __construct()
    {
        $this->table = 'users';
    }

    public function auth($login, $hash, $remember = false)
    {

        $user = $this->singleRow([
            'where' => "login='$login' AND password='$hash'"
        ]);
        if ($user['id']) {
            $_SESSION['userid'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            if ($remember) {
                setcookie("login", $user['login'], time()+3600*24*30, '/');
                setcookie("password", $user['password'], time()+3600*24*30, '/');
            }

            return true;
        }
        return false;
    }

    public function register($login, $hash, $admin = 0) {
        $result = $this->insert([
            'params' => [
                'login'    => $login,
                'password' => $hash,
                'admin'    => $admin
            ]
        ]);
        return $result;
    }

    public function checkLogin($login) {
        return $this->find('login', $login);
    }
}