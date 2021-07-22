<?php

class charModel extends CoreModel
{
	public $_table = "character";
	public function getAll()
	{
		$select = $this->_db->prepare('SELECT * FROM characters ORDER BY level ASC;');
		$select -> execute();
		return $select -> fetchAll();
	}
}