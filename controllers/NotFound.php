<?php
/**
 * Created by PhpStorm.
 * User: ball
 * Date: 21.12.2017
 * Time: 11:14
 */

namespace controllers;


use components\Controller;

class NotFound extends Controller
{
    public function error()
    {
        $this->render('404.tmpl', [
            'title' => 'Ошибка 404'
        ]);
    }
}