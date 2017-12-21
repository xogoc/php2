<?php
/**
 * Created by PhpStorm.
 * User: xogoc
 * Date: 19.12.2017
 * Time: 15:54
 */

namespace components;
use traits\SingletoneTrait;
use Twig_Autoloader;
use Twig_Loader_Filesystem;
use Twig_Environment;

class Viewer implements ComponentsInterface
{
  use SingletoneTrait;

  protected $twig = null;

  protected $params = [];

  public function init()
  {
    require_once __DIR__."/../vendor/autoload.php";
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem(__DIR__."/../views");
    $this->twig = new Twig_Environment($loader);
  }

  public function addParams(array $params = [])
  {
    $this->params = array_merge_recursive($this->params, $params);
  }

  public function render($view,$params = []) {
      $this->addParams($params);
      //var_dump($this->params);
      echo $this->twig->render($view, $this->params);
  }
  
}