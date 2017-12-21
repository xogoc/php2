<?php
/**
 * Created by PhpStorm.
 * User: ball
 * Date: 21.12.2017
 * Time: 10:40
 */

namespace controllers;


use components\Controller;

class ProfileController extends Controller
{
    public function actionIndex()
    {
        $this->render('profile.tmpl');
    }
}