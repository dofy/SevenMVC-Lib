<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/22 
 */

 /**
  * 控制器基类
  **/
class SevenController
{
    protected $tpl;
    protected $view;
    protected $models;
    
    public function __construct()
    {
        if(count($this->models))
        {
            foreach($this->models as $model)
            {
                $model = ucfirst(strtolower($model));
                $m_file = USER_CODE_PATH . __DS . 'models' . __DS . $model . '.php';
                if(file_exists($m_file))
                {
                    include $m_file;
                    $this->$model = new $model;
                }
            }
        }
    }

    /**
     * 设定 view
     **/
    public function setView($view)
    {
        $this->view = $view;
    }
    
    /**
     * 绑定模板变量
     */
    public function assign($key, $value)
    {
        $this->view->assign($key, $value);
    }

    /**
     * 模板路径
     */
    public function getTpl()
    {
        return $this->tpl;
    }
    
    /**
     * 默认动作
     **/
    public function indexAction()
    {
        // nothing
    }
    
    /**
     * 执行动作前
     **/
    public function actionBefore()
    {
        // nothing
    }
    
    /**
     * 执行动作后
     **/
    public function actionAfter()
    {
        // nothing
    }
}
?>