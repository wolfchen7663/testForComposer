<?php
// 修改完composer.json 配置，我们需要执行composer dump. 或者 composer update
// 自动加载
include 'vendor/autoload.php';

use core\Bootstrap;

Bootstrap::run();
