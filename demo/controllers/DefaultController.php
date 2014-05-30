<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/21 
 */

class DefaultController extends SevenController
{
    public function __construct()
    {
        $this->models = array('users', 'books');
        parent::__construct();
    }

    public function indexAction()
    {
        $this->assign('title', 'Index');
        $this->assign('users', $this->Users->getList());
        $this->assign('books', $this->Books->getList());
    }
}
?>