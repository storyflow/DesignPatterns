<?php

namespace Demo\Task;

class TaskCateA extends TaskCate
{
    public function __construct()
    {
        parent::__construct();
        echo "创建分类A" .PHP_EOL;
    }

    public function doA()
    {
        echo "cateA doA..." .PHP_EOL;
    }
}