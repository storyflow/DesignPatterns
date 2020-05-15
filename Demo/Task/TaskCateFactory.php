<?php

namespace Demo\Task;

class TaskCateFactory
{
    public function __construct()
    {
    }

    public function create($cate = '')
    {
        switch ($cate) {
            case 'a':
                return new TaskCateA();
            case 'b':
                return new TaskCateB();
            default:
                return new TaskCate();
                break;
        }
    }
}