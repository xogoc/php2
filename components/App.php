<?php

namespace components;

use traits\SingletoneTrait;

class App
{
    use SingletoneTrait;

    public $request = null;
    public $auth = null;
    public $db = null;
    public $viewer = null;


    public function run() {
        if(empty($this->request)) {

            $this->db = Db::getInstance();
            $this->db->init();

            $this->viewer = Viewer::getInstance();
            $this->viewer->init();

            $this->request = new Request();
            $this->request->init();

            $this->auth = new Auth();
            $this->auth->init();

        }

        $this->request->getController();

        return true;
    }
}