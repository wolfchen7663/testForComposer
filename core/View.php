<?php

namespace core;

class View
{
    //模板文件
    protected $file;
    //模板变量
    protected $vars = [];
    //读取文件
    public function make($file)
    {
        $this->file = 'view/' . $file . '.html';
        return $this;
    }
    //分配变量
    public function with($name, $value)
    {
        $this->vars[$name] = $value;
        return $this;
    }
    //__toString 是在直接输出对象引用时自动调用的
    public function __toString()
    {
        // 分配到内存里
        extract($this->vars);
        include $this->file;
        return '';
    }
}
