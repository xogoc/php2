<?php
/**
 * Created by PhpStorm.
 * User: ball
 * Date: 21.12.2017
 * Time: 13:06
 */

namespace models;


use components\Model;

class Menu extends Model
{
    public function getMenu() {
        return [
                'gallery' => [
                    'name' => 'Галерея',
                    'href' => '/gallery'
                ],
                'shop'    => [
                    'name' => 'Магазин',
                    'href' => '/shop'
                ]
            ];
    }
}