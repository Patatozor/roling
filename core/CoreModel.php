<?php

/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 22/04/2016
 * Time: 23:10
 */
class CoreModel extends Core
{
    protected $_db;
    public $_table = "core";
		
	public function __construct()
    {
		$this->_dns = 'mysql:host='.DBHOST.'; dbname='.DBNAME;
        try
		{
			$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".DBENC,
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			$this->_db = new PDO($this->_dns, DBLOGIN, DBPW, $option);
		}
		catch(PDOException $e)
		{
			die($e -> getMessage());
		}
    }
	
	public function delete($id)
	{
		try {
			$delete = $this->_db->prepare('DELETE FROM '.$this->_table.' WHERE id = :id');
			$delete->bindValue(':id', $id, PDO::PARAM_INT);
			$delete->execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}
	
	public function show($id)
	{
		$select = $this->_db->prepare('SELECT * FROM '.$this->_table.' WHERE id=:id');
		$select->bindParam(':id', $id, PDO::PARAM_INT);
		$select -> execute();
		return $select -> fetch();
	}

	public function showAll()
	{
		$select = $this->_db->prepare('SELECT * FROM '.$this->_table);
		$select -> execute();
		return $select -> fetchAll();
	}
}