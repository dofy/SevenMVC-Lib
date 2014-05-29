<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/22 
 */

require('includes.php');

class SevenApplication
{
    private $cflag;
    private $aflag;
    private $pre;
    private $controller;
    private $tpl;
    private $view;
    
    /**
     * Application
     * @param   String  $cflag   控制器键名
     * @param   String  $aflag   动作器键名
     **/
    public function __construct($cflag = 'c', $aflag = 'a', $pre = null)
    {
        $this->cflag = $cflag;
        $this->aflag = $aflag;

        $this->pre = $pre;
    }
    
    /**
     * 初始化(框架核心)
     **/
    public function run()
    {
        // 取 controller
        if(isset($_REQUEST[$this->cflag]))
        {
            $c = ucfirst(strtolower(trim($_REQUEST[$this->cflag])));
        }
        
        if(empty($c))
        {
            $c = 'Default';
        }

        $cn = $c . 'Controller';
        $cf = USER_CODE_PATH . __DS . 'controllers' . __DS . $this->pre . $cn . '.php';
        
        // 判断类文件是否存在, 不存在, 报错
        if(!file_exists($cf))
            die("类文件不存在: <em>$cf</em>");
        
        // 取 action
        if(isset($_REQUEST[$this->aflag]))
        {
            $a = strtolower(trim($_REQUEST[$this->aflag]));
        }
        
        if(empty($a))
        {
            $a = 'index';
        }
        
        $an = $a . 'Action';
        
        // 类存在, 引入并创建类
        include($cf);
        $this->controller = new $cn();
        
        // 判断方法是否存在, 不存在默认执行 index 方法
        if(!method_exists($this->controller, $an))
        {
            $a  = 'index';
            $an = 'indexAction';
        }

        $uri = $_SERVER['REQUEST_URI'];
        
        // 获取模板文件
        $this->tpl = $this->pre . strtolower($c) . __DS . $a . '.tpl';
        
        // 加载模板
        $this->view = new SevenView();
        $this->view->assign('__Controller', $c);
        $this->view->assign('__Action', ucfirst($a));
        $this->view->assign('__controller', strtolower($c));
        $this->view->assign('__action', $a);

        $this->view->assign('__uri', $uri);
        
        $this->controller->setView($this->view);

        // 执行 Action
        $this->controller->actionBefore();

        if(method_exists($this->controller, $an))
            $this->controller->$an();

        $this->controller->actionAfter();
        
        // 模板缓存 key
        $uri = $c . '_' . $a . '_' . $uri;
        // 渲染模板
        @$this->view->display($this->controller->getTpl() ? $this->controller->getTpl() : $this->tpl, md5($uri));
    }
}
?>