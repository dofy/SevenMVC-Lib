<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/30 
 */
class Users extends SevenModule
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }
    
    public function checkUser($name, $pass)
    {
        $name = SevenDB::sqlstr($name);
        $pass = SevenDB::sqlstr($pass);
        return $this->getOne("select * from $this->table where `name` = '$name' and `pass` = md5('$pass')");
    }

    public function updateIp($id, $ip)
    {
        return $this->update(array('ip'=>$ip), array('id' => $id));
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

    public function getUserByName($name)
    {
        return $this->getOne("select * from $this->table where `name` = '" . SevenDB::sqlstr($name) . "'");
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