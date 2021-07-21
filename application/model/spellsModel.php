<?php

class spellsModel extends CoreModel
{
	public function getAll()
	{
		$select = $this->_db->prepare('SELECT * FROM spells ORDER BY label ASC;');
		$select -> execute();
		return $select -> fetchAll();
	}
	
	public function show($id)
	{
		return $this->readOneFromTable('spells',$id);
	}
	
	public function insert($label,$description, $cost, $range, $difficulty)
	{
		try 
		{
			$insert = $this->_db -> prepare('INSERT INTO spells (label, description, cost, casting_range, difficulty) 
				VALUES (:label, :description, :cost, :range, :difficulty)');

			$insert -> bindValue(':label', $label, PDO::PARAM_STR);
			$insert -> bindValue(':description', $description, PDO::PARAM_STR);
			$insert -> bindValue(':cost', $cost, PDO::PARAM_STR);
			$insert -> bindValue(':range', $range, PDO::PARAM_STR);
			$insert -> bindValue(':difficulty', $difficulty, PDO::PARAM_STR);

			$insert -> execute();
			return $this->_db->lastInsertId();
		}
		catch (CustomException $e)
		{
			return 0;
		}
	}

	public function link_voie_spell($idskill, $idvoie, $rank)
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
	
	public function update($id, $label,$description, $cost, $range, $difficulty)
	{
		try
		{
			$update = $this->_db -> prepare('UPDATE spells SET label = :label, cost = :cost, description = :description, casting_range = :range, difficulty = :difficulty WHERE id = :id');
			$update -> bindValue(':id', $id, PDO::PARAM_INT);
			$update -> bindValue(':label', $label, PDO::PARAM_STR);
			$update -> bindValue(':cost', $cost, PDO::PARAM_STR);
			$update -> bindValue(':description', $description, PDO::PARAM_STR);
			$update -> bindValue(':range', $range, PDO::PARAM_STR);
			$update -> bindValue(':difficulty', $difficulty, PDO::PARAM_STR);
			$update -> execute();
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
			$delete = $this->_db->prepare('DELETE FROM spells WHERE id = :id');
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