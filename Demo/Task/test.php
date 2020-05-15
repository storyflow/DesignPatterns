<?php

include dirname(__FILE__) . '/../../autoload.php';

use Demo\Task\TaskCateFactory;

$factory = new TaskCateFactory();
$taskCate = $factory->create('aaaa');
$taskCate->doA();
$taskCate->doB();
$taskCate->doC();
