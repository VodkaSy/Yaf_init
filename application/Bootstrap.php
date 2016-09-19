<?php
/**
 * Author: 失忆<shi_yi@live.cn>
 * Date: 2016/9/13
 * Note: 
 */

class Bootstrap extends \Yaf\Bootstrap_Abstract{

    /**
     * @author: 失忆<shi_yi@live.cn>
     * @note: 保存配置
     */
    public function _initConfig() {
        $arrConfig = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $arrConfig);

        //关闭自动渲染
        \Yaf\Dispatcher::getInstance()->autoRender(FALSE);
    }

    public function _initPlugin(\Yaf\Dispatcher $dispatcher) {
       /* //注册一个插件
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);*/
    }

    public function _initRoute(\Yaf\Dispatcher $dispatcher) {
        //在这里注册自己的路由协议,默认使用简单路由
    }

    /**
     * @author: 失忆<shi_yi@live.cn>
     * @note: 自动加载composer三方类库
     * @param \Yaf\Dispatcher $dispatcher
     */
    public function _initLoader(\Yaf\Dispatcher $dispatcher){
        \Yaf\Loader::import(APP_PATH . "/vendor/autoload.php");
        //\Yaf\Loader::import(APPLICATION_CORES_PATH . "/functions.php");
    }


    public function _initView(\Yaf\Dispatcher $dispatcher){
        //在这里注册自己的view控制器，例如smarty,firekylin
    }

    public function _initSession(\Yaf\Dispatcher $dispatcher){
        session_id() || session_start();
    }
}
