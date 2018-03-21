<?php
/**
 * Created by PhpStorm.
 * User: qqdd
 * Date: 2018/3/20
 * Time: 16:27
 */

namespace services;

class View
{
    const VIEW_BASE_PATH = '/app/views/';

    public $view;
    public $data;

    public function __construct($view)
    {
        $this->view = $view;
    }

    /**
     * 引入对应的view地址
     * @param null $viewName
     * @return View
     */
    public static function make($viewName = null)
    {
        if( ! $viewName ){
            throw new InvalidArgumentException("视图名称不能为空！");
        } else {
            $viewFilePath = self::getFilePath($viewName);
            if( is_file($viewFilePath) ) {
                return new View($viewFilePath);
            } else {
                throw new UnexpectedValueException("视图文件不存在！");
            }
        }
    }

    public function with($key, $value = null)
    {
        $this->data[$key] = $value;
        return $this;
    }

    private static function getFilePath($viewName)
    {
        $filePath = str_replace('.','/',$viewName);
        return BASE_PATH.self::VIEW_BASE_PATH.$filePath.'.php';
    }

    /**
     * 方法重载
     * @param $method 方法名
     * @param $parameters 参数
     * @return View
     */
    public function __call($method, $parameters)
    {
        if (starts_with($method, 'with'))
        {
            return $this->with(snake_case(substr($method, 4)),$parameters[0]);
        }

        throw new BadMethodCallException("方法 [$method] 不存在！");
    }
}