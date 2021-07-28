<?php

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

	public function showAll($orderby = '', $desc = 0)
	{
		if ($desc == 0)
		{
			$desc = 'asc';
		}
		else
		{
			$desc = 'desc';
		}
		if ($orderby != '')
		{
			$order = 'ORDER BY '.$orderby.' '.$desc;
		}
		else
		{
			$order = 'ORDER BY slabel '.$desc;
		}
		$select = $this->_db->prepare('SELECT * FROM '.$this->_table.' '.$order);
		$select -> execute();
		return $select -> fetchAll();
	}

	public function insert($data)
	{
		try 
		{
			$cols = '';
			foreach ($data as $key => $value)
			{
				$cols .= $key.', ';
				$values .= ':'.$key.', ';
			}
			$cols = substr($cols, 0, -2);
			$values = substr($values, 0, -2);
			$insert = $this->_db->prepare('INSERT INTO '.$this->_table.' ('.$cols.') VALUES ('.$values.')');
			foreach ($data as $key => &$value)
			{
				if (substr($key, 0, 1) == 's')
				{
					$insert->bindParam(':'.$key, $value, PDO::PARAM_STR);
				}
				else if (substr($key, 0, 1) == 'i')
				{
					$insert->bindParam(':'.$key, $value, PDO::PARAM_INT);
				}
			}
			$insert->execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}

	public function update($data, $id)
	{
		try 
		{
			$set = '';
			foreach ($data as $key => $value)
			{
				$set .= $key.' = :'.$key.', ';
			}
			$set = substr($set, 0, -2);
			echo 'UPDATE '.$this->_table.' SET '.$set.' WHERE id = :id';
			$update = $this->_db->prepare('UPDATE '.$this->_table.' SET '.$set.' WHERE id = :id');
			$update->bindParam(':id', $id, PDO::PARAM_INT);
			foreach ($data as $key => &$value)
			{
				if (substr($key, 0, 1) == 's')
				{
					$update->bindParam(':'.$key, $value, PDO::PARAM_STR);
				}
				else if (substr($key, 0, 1) == 'i')
				{
					$update->bindParam(':'.$key, $value, PDO::PARAM_INT);
				}
			}
			$update->execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}
}