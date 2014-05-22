<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 1.0
 * Update:  2009-3-5
 */
class Users extends SevenModule
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }
    
    public function checkUser($username, $password)
    {
        $username = SevenDB::sqlstr($username);
        $password = SevenDB::sqlstr($password);
        return $this->getOne("select * from $this->table where `name` = '$username' and `pass` = md5('$password')");
    }
    
    public function getList($page = 1)
    {
        $this->getCount();
        return $this->getRows("select * from $this->table", $page);
    }

    public function getUser($id)
    {
        return $this->getOne("select * from $this->table where `id` = $id");
    }

    public function getUserByName($username)
    {
        return $this->getOne("select * from $this->table where `name` = '" . SevenDB::sqlstr($username) . "'");
    }

    public function addUser($user)
    {
        return $this->insert($user);
    }

    public function editUser($user, $id)
    {
        return $this->update($user, array('id'=>$id));
    }

    public function delUser($id)
    {
        return $this->delete(array('id' => $id));
    }

}
?>