<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 1.0
 * Update:  2014/05/21 
 */

class UserController extends SevenController
{
    public function __construct()
    {
        $this->models = array('users');
        parent::__construct();
    }

    public function indexAction()
    {
        $this->assign('users', $this->Users->getList());
    }

    public function detailAction()
    {
        $id = COMM::gets('id', 0);
        $this->assign('item', $this->Users->getUser($id));
    }

    public function actionBefore()
    {
        $this->assign('title', 'Books');
    }
}
?>