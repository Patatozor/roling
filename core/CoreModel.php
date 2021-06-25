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
		
	public function __construct()
    {
		$this->_dns = 'mysql:host='.DBHOST.'; dbname='.DBNAME;
        try
		{
			$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".DBENC,
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			$this->_db = new PDO($this->_dns, DBLOGIN, DBPW, $option);
		}
		catch(Exception $e)
		{
			die($e -> getMessage());
		}
    }
	
	public function readAllFromTable($table)
	{
		$select = $this->_db->prepare('SELECT * FROM '.$table);
		$select -> execute();
		return $select -> fetchAll();
	}
	
	public function readOneFromTable($table, $id)
	{
		$select = $this->_db->prepare('SELECT * FROM '.$table.' WHERE id=:id');
		$select->bindParam(':id', $id, PDO::PARAM_INT);
		$select -> execute();
		return $select -> fetch();
	}
}