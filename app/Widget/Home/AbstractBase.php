<?php

namespace App\Widget\Home;
/**
 * 小组件
 */
Abstract class AbstractBase
{

    /**
     * 传入过来的数据
     *
     * @var array
     */
    protected $data;

    /**
     * 当前module
     *
     * @var string
     */
    protected $module;

    /**
     * 当前class
     *
     * @var string
     */
    protected $class;

    /**
     * 当前function
     *
     * @var string
     */
    protected $function;

    /**
     * 初始化
     */
    public function __construct()
    {

    }

    /**
     * 设置当前请求的module,class,function
     *
     * @param string $class 类
     * @param string $function 函数
     * @param string $module 模块
     * @access public
     * @return object $this
     */
    public function setCurrentAction($class, $function='', $module = '')
    {
        $this->module = $module;
        $this->class = $class;
        $this->function = $function;
        return $this;
    }

    /**
     * 设置传进来的额外的数据
     *
     * @param array $data
     * @return object $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * 新增按钮
     *
     * @access public
     */
    public function nav()
    {
        
        return $html;
    }

}