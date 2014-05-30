<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
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

    public function editAction()
    {
        $id = COMM::gets('id', 0);
        $this->assign('item', $this->Books->getBook($id));
    }

    public function deleteAction()
    {
        $id = intval(COMM::gets('id', 0));
        
        if($this->Books->delBook($id) > 0)
        {
            $this->assign('json', array('rc'=>0, 'msg'=>'图书删除成功.', 'id'=>$id));
        }
        else
        {
            $this->assign('json', array('rc'=>1, 'msg'=>'图书删除失败, 可能图书不存在.'));
        }
        $this->tpl = 'json.tpl';
    }

    public function saveAction()
    {
        $id = intval(COMM::posts('id'));
        $back = COMM::posts('backurl');

        $item['title'] = trim(COMM::posts('title'));
        $item['author'] = trim(COMM::posts('author'));
        $item['pages'] = intval(COMM::posts('pages', 0));
        $item['content'] = COMM::posts('content');

        if($item['title'] == '' || $item['author'] == '')
        {
            $this->assign('json', array('rc'=>1, 'msg'=>'标题和作者不能为空.'));
        }
        else
        {
            if($id <= 0)
            {
                // add
                $this->Books->addBook($item);
                $this->assign('json', array('rc'=>0, 'msg'=>'图书添加成功.', 'backurl'=>$back));
            }
            else
            {
                // update
                $this->Books->editBook($item, $id);
                $this->assign('json', array('rc'=>0, 'msg'=>'图书修改成功.', 'backurl'=>$back));
            }
        }

        $this->tpl = 'json.tpl';
    }

    public function actionBefore()
    {
        if(!COMM::getSs('islogin', false))
        {
            header('Location: ?c=login');
        }
        $this->assign('title', 'Books');
    }
}
?>