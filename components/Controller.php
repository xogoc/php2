<?php
namespace components;


use models\Menu;

abstract class Controller
{
    public function render ($view,$params = [])
    {
        $menu = new Menu();
        $this->addParams([
            'menu' => $menu->getMenu()
        ]);
        $viewer = Viewer::getInstance();
        $viewer->render($view, $params);
    }

    public function addParams(array $params = [])
    {
        $viewer = Viewer::getInstance();
        $viewer->addParams($params);
    }
}