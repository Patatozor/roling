<?php

class maitrisesModel extends CoreModel
{
	const TABLE = "maitrises";

	public function showAll()
	{
	$select = $this->_db->prepare('SELECT * FROM maitrises ORDER BY label ASC');
	$select->execute();
	return $select->fetchAll();
	}

	public function show($id)
	{
		return $this->readOneFromTable('maitrises',$id);
	}

	public function insert($label,$description)
	{
		try
		{
			$insert = $this->_db->prepare('INSERT INTO maitrises(label, description) VALUES (:label, :description)');
			$insert->bindValue(':label', $label, PDO::PARAM_STR);
			$insert->bindValue(':description', $description, PDO::PARAM_STR);
			$insert->execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}

	public function update($id, $label, $description)
	{
		try
		{
			$update = $this->_db->prepare('UPDATE maitrises SET label=:label, description=:description WHERE id=:id');
			$update->bindValue('id', $id, PDO::PARAM_INT);
			$update->bindValue('label', $label, PDO::PARAM_STR);
			$update->bindValue('description', $description, PDO::PARAM_STR);
			$update->execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}

	public function delete($id)
	{
		try {
			$delete = $this->_db->prepare('DELETE FROM maitrises WHERE id = :id');
			$delete->bindValue(':id', $id, PDO::PARAM_INT);
			$delete->execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}
}
