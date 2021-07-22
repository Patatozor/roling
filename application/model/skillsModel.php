<?php

class skillsModel extends CoreModel
{
	const TABLE = "skills";

	public function getAllVoies()
	{
		$select = $this->_db->prepare('SELECT * FROM voies ORDER BY label ASC;');
		$select -> execute();
		return $select -> fetchAll();
	}
	
	public function show($id)
	{
		return $this->readOneFromTable('voies',$id);
	}
	
	public function insert($label,$description, $cost, $number_of_use, $type)
	{
		try 
		{
			$insert = $this->_db -> prepare('INSERT INTO skills (label, description, cost, number_of_use, type) 
				VALUES (:label, :description, :cost, :number_of_use, :type)');

			$insert -> bindValue(':label', $label, PDO::PARAM_STR);
			$insert -> bindValue(':type', $type, PDO::PARAM_STR);
			$insert -> bindValue(':description', $description, PDO::PARAM_STR);
			$insert -> bindValue(':cost', $cost, PDO::PARAM_INT);
			$insert -> bindValue(':number_of_use', $number_of_use, PDO::PARAM_STR);

			$insert -> execute();
			return $this->_db->lastInsertId();
		}
		catch (CustomException $e)
		{
			return 0;
		}
	}

	public function link_voie_skill($idskill, $idvoie, $rank)
	{
		try {
			$insert = $this->_db -> prepare('INSERT INTO skill_has_voies (id_skill, id_voie, rank) 
				VALUES (:id_skill, :id_voie, :rank)');
			$insert -> bindValue(':id_skill', $idskill, PDO::PARAM_INT);
			$insert -> bindValue(':id_voie', $idvoie, PDO::PARAM_INT);
			$insert -> bindValue(':rank', $rank, PDO::PARAM_INT);

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