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
        $this->models = array('books');
        parent::__construct();
    }

    public function indexAction()
    {
        $this->assign('name', COMM::getSs('name'));
        $this->assign('ip', COMM::getSs('ip'));

        $this->assign('title', 'Index');
        $this->assign('books', $this->Books->getList());
    }

    public function actionBefore()
    {
        if(!COMM::getSs('islogin', false))
        {
            header('Location: ?c=login');
        }
        $this->assign('title', 'Index');
    }
}
?>