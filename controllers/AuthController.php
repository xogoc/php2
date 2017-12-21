<?php
/**
 * Created by PhpStorm.
 * User: xogoc
 * Date: 14.12.2017
 * Time: 15:41
 */

namespace controllers;


use components\Controller;
use models\User;

class AuthController extends Controller
{

  public function actionIndex()
  {
      $this->actionLogin();
  }

  public function actionLogin() {
      if ($_POST['action'] == 'login' && $_POST['login'] && $_POST['password']) {
          $user = new User();
          //var_dump($_POST);
          if ($user->auth($_POST['login'], md5($_POST['password']), $_POST['remember'])) {
              $this->redirect();
          }
          else {
              $_SESSION['error'] = "Неверные логин или пароль";
              $this->redirect('/auth/login');
          }
      }
      if ($_SESSION['error']) {
          $this->addParams([
              'error' => $_SESSION['error']
          ]);
          unset($_SESSION['error']);
      }
      $this->render('auth.tmpl', [
          'action' => 'login',
          'title'  => 'Вход'
      ]);
  }

  public function render($view, $params = [])
  {
      if ($_SESSION['userid'] && $_SESSION['login']) {
          $this->redirect('/profile');
      }
      parent::render($view, $params);
  }

    public function actionRegister()
  {
      if ($_POST['action'] == 'register' && $_POST['login'] && $_POST['password']) {
          $user = new User();
          //var_dump($_POST);
          if ($user->checkLogin($_POST['login'])) {
              $_SESSION['error'] = "Такой логин занят";
              $this->redirect('/auth/register');
          }
          elseif ($user->register($_POST['login'], md5($_POST['password']), ($_POST['role'] == 'admin' ? 1 : 0))) {
              $_SESSION['regSuccess'] = true;
              $this->redirect('/auth/register');
          }
          else {
              $_SESSION['error'] = "Произошла неведомая ошибка";
              $this->redirect('/auth/register');
          }
      }
      if ($_SESSION['error']) {
          $this->addParams([
              'error' => $_SESSION['error']
          ]);
          unset($_SESSION['error']);
      }
      if ($_SESSION['regSuccess']) {
          $this->addParams([
              'success' => true
          ]);
          unset($_SESSION['regSuccess']);
      }
      $this->render('auth.tmpl', [
          'action' => 'register',
          'title'  => 'Регистрация'
      ]);
  }

  protected function redirect($location = false)
  {
      if (!$location)
        $location = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : "/";
      Header("Location: ".$location, true, 303);
      exit;
  }

  public function actionLogout()
  {
    unset($_SESSION['userid']);
    unset($_SESSION['login']);

    setcookie("login", " ", time()-3600);
    setcookie("password", " ", time()-3600);

    $this->redirect();

  }
}