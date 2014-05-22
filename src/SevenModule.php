<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/22 
 */
class SevenModule
{
    protected $db;
    protected $table;
    
    protected function __construct()
    {
        $this->db = new SevenDB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_CHAR, DB_PORT);
        $this->db->debug = DEBUG;
    }

    protected function insert($object)
    {
        return $this->db->insert($this->table, $object);
    }

    protected function update($object, $which)
    {
        return $this->db->update($this->table, $object, $which);
    }

    protected function delete($which)
    {
        return $this->db->delete($this->table, $which);
    }

    protected function getAll($sql)
    {
        return $this->db->getAll($sql);
    }

    protected function getCount($key = 'id', $others = null)
    {
        return $this->db->getCount($this->table, $key, $others);
    }

    protected function getRows($sql, $page = 1, $pagesize = 20)
    {
        return $this->db->getRows($sql, $page, $pagesize);
    }

    protected function getOne($sql)
    {
        return $this->db->getOne($sql);
    }

    public function pageInfo()
    {
        return $this->db->pageInfo();
    }
}
?>