<?php

namespace core;

class Bootstrap
{
    public static function run()
    {
        session_start();
        self::parseUrl();
    }
    // 分析URL生成控制器方法常量
    public static function parseUrl()
    {
        if (isset($_GET['s'])) {
            // 分析s变量生成控制器方法
            $info =  explode("/", $_GET['s']);
            // output($info);
            $class = '\web\controller\\' . ucfirst($info[0]);
            $action = $info[1];
        } else {
            // 使用默认控制器
            $class = "\web\controller\Index";
            $action = "show";
        }
        $newClass = new $class;
        echo $newClass->$action();
        // output($_GET);
    }
}
