<?php

class SkillsModel extends CoreModel
{
	public function getAllClasses()
	{
		$select = $this->_db->prepare('SELECT * FROM classes ORDER BY label ASC;');
		$select -> execute();
		return $select -> fetchAll();
	}
	
	public function show($id)
	{
		return $this->readOneFromTable('classes',$id);
	}
	
	public function insert($label,$description, $cost, $number_of_use, $type)
	{
		try 
		{
			$insert = $this->_db -> prepare('INSERT INTO classes (label, description) 
				VALUES (:label, :description)');

			$insert -> bindValue(':label', $label, PDO::PARAM_STR);
			$insert -> bindValue(':description', $description, PDO::PARAM_STR);

			$insert -> execute();
			return $this->_db->lastInsertId();
		}
		catch (CustomException $e)
		{
			return 0;
		}
	}

	public function link_voie_skill($idskill, $idvoie)
	{
		try {
			$insert = $this->_db -> prepare('INSERT INTO classe_has_voies (id_classe, id_voie) 
				VALUES (:id_classe, :id_voie)');
			$insert -> bindValue(':id_classe', $idclasse, PDO::PARAM_INT);
			$insert -> bindValue(':id_voie', $idvoie, PDO::PARAM_INT);

			$insert -> execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}
	
	public function update()
	{
	}
	
	public function delete()
	{
	}
}