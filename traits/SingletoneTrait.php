<?php
/**
 * Created by PhpStorm.
 * User: AlterWalker
 * Date: 14.12.2017
 * Time: 20:47
 */

namespace traits;


trait SingletoneTrait
{
    private static $instance = null;
    final private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}