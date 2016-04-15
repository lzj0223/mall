<?php

namespace App\Services;

use Route;

/**
 * 系统路由
 * 
 * 注：大部分的路由及控制器所执行的动作来说，
 * 
 * 你需要返回完整的 Illuminate\Http\Response 实例或是一个视图
 *
 * @author jiang <mylampblog@163.com>
 */
class Routes
{
    private $adminDomain;

    private $wwwDomain;

    private $noPreDomain;
    private $request_method = ['get','post','patch','put','delete'];
    public static $app;

    /**
     * 初始化，取得配置
     *
     * @access public
     */
    public function __construct()
    {
        global $app;
        self::$app =  $app;
        $this->adminDomain = config('sys.sys_admin_domain');
        $this->wwwDomain = config('sys.sys_mall_domain');
        $this->noPreDomain = config('sys.sys_mall_nopre_domain');
    }

    /**
     * 商城通用路由
     * 
     * 这里必须要返回一个Illuminate\Http\Response 实例而非一个视图
     * 
     * 原因是因为csrf中需要响应的必须为一个response
     *
     * @access public
     */
    public function www()
    {
        $homeDoaminArray = ['home' => $this->wwwDomain, 'home_empty_prefix' => $this->noPreDomain];
        foreach($homeDoaminArray as $key => $value)
        {
            self::$app->group(['domain' => $value, ], function($app) use ($key)
            {
                foreach ($this->request_method as $value){
                    Routes::$app->$value('/', 'App\Http\Controllers\Home\IndexController@index');
                    Routes::$app->$value('{url:[A-Za-z0-9\/_]+}.html', ['as' => $key, function($url)
                    {
                        if($url=='404'){
                            return abort(404);
                        }
                        $url_arr = explode('/',$url);
                        $class = $url_arr[0];
                        $action = isset($url_arr[1]) ? $url_arr[1] : 'index';

                        $class = 'App\\Http\\Controllers\\Home\\'.ucfirst(strtolower($class)).'Controller';
                        if(class_exists($class))
                        {
                            $classObject = new $class();
                            if(method_exists($classObject, $action))
                            {
                                $return = call_user_func(array($classObject, $action),$url);
                                if( ! $return instanceof \Illuminate\Http\Response)
                                {
                                    Routes::$app->configure('home');
                                    $cacheSecond = config('home.cache_control');
                                    $time = date('D, d M Y H:i:s', time() + $cacheSecond) . ' GMT';
                                    return response($return)->header('Cache-Control', 'max-age='.$cacheSecond)->header('Expires', $time);
                                }
                                return $return;
                            }
                        }
                        return abort(404);
                    }]);
                }
            });
        }
        return $this;
    }
}
