<?php
namespace components;

use controllers;

class Request implements ComponentsInterface
{
    public $controller = 'gallery';
    public $action = 'index';
    public $args = array();
    protected $namespaceControllers = 'controllers';

    public function init()
    {

        $url = $_SERVER['REQUEST_URI'];

        $unparsed_path = explode('?',$url);


        $path = explode('/',$unparsed_path[0]);
        //var_dump($path);
        for ($i=1;$i<count($path);$i++) {
            switch ($i) {
                case 1:
                    if ($path[$i])
                        $this->controller = $path[1];
                    break;
                case 2:
                    if ($path[$i])
                        $this->action = $path[2];
                    break;
                default:
                    if ($path[$i])
                        $this->args[] = $path[$i];
            }
        }

    }

    public function getController() {
        $classController = $this->namespaceControllers . '\\' . ucfirst($this->controller). 'Controller';

        $action = 'action' . ucfirst($this->action);

        //var_dump($classController);
        //var_dump($action);

        if(class_exists($classController)) {
            $instanceController = new $classController;
            if(method_exists($instanceController, $action)) {

                call_user_func_array([$instanceController,$action],$this->args);
            } else {
                //throw new Exception('Экшн не найден в контроллере ' . $classController);
                $this->notFound();
            }
        }
        else {
            $this->notFound();
        }
    }

    protected function notFound()
    {
        $class = $this->namespaceControllers . '\\NotFound';
        $instance = new $class;
        call_user_func_array([$instance,'error'],[]);

    }

}