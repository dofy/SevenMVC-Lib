<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/22 
 */

/**
 * 视图类
 **/
class SevenView extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        self::init();
    }
    
    private function init()
    {
        $this->setTemplateDir(USER_CODE_PATH . '/templates/');
        $this->setCompileDir(USER_CODE_PATH . '/templates_c/');
        $this->setConfigDir(USER_CODE_PATH . '/configs/');
        $this->setCacheDir(USER_CODE_PATH . '/cache/');
        
        $this->caching = SMARTY_CACHE;
        $this->cache_lifetime = SMARTY_CACHE_LIFETIME;
        $this->debugging = SMARTY_DEBUG;
    }
}
?>