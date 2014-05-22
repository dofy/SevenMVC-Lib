<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 1.0
 * Update:  2009-3-5
 */
class Books extends SevenModule
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'books';
    }
    
    public function getList($page = 1)
    {
        $this->getCount();
        return $this->getRows("select * from $this->table", $page);
    }

    public function getBook($id)
    {
        return $this->getOne("select * from $this->table where `id` = $id");
    }

    public function addBook($book)
    {
        return $this->insert($book);
    }

    public function editBook($book, $id)
    {
        return $this->update($book, array('id'=>$id));
    }

    public function delBook($id)
    {
        return $this->delete(array('id' => $id));
    }

}
?>