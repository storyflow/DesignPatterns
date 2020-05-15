<?php
namespace Demo\Task;

class TaskCateB extends TaskCate
{
    public function __construct()
    {
        parent::__construct();
        echo "创建分类B" .PHP_EOL;
    }

    public function doB()
    {
        echo "cateB doB..." .PHP_EOL;
    }
}