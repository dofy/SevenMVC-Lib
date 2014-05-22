<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 1.0
 * Update:  2014/05/21 
 */

class BookController extends SevenController
{
    public function __construct()
    {
        $this->models = array('books');
        parent::__construct();
    }

    public function indexAction()
    {
        $this->assign('books', $this->Books->getList());
    }

    public function detailAction()
    {
        $id = COMM::gets('id', 0);
        $this->assign('item', $this->Books->getBook($id));
    }

    public function actionBefore()
    {
        $this->assign('title', 'Books');
    }
}
?>