<?php

class voiesModel extends CoreModel
{
	const TABLE = "voies";
	
	public function insert($label,$article,$description)
	{
		try 
		{
			$insert = $this->_db -> prepare('INSERT INTO voies (label, article, description) VALUES (:label, :article, :description)');

			$insert -> bindValue(':label', $label, PDO::PARAM_STR);
			$insert -> bindValue(':article', $article, PDO::PARAM_STR);
			$insert -> bindValue(':description', $description, PDO::PARAM_STR);

			$insert -> execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}

	public function update($id, $label,$article,$description)
	{
		try
		{
			$update = $this->_db -> prepare('UPDATE voies SET label = :label, article = :article, description = :description WHERE id = :id');
			$update -> bindValue(':id', $id, PDO::PARAM_INT);
			$update -> bindValue(':label', $label, PDO::PARAM_STR);
			$update -> bindValue(':article', $article, PDO::PARAM_STR);
			$update -> bindValue(':description', $description, PDO::PARAM_STR);
			$update -> execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}

	public function getVoieSkills($id)
	{
		$select = $this->_db->prepare('SELECT * FROM skills as t1 
			LEFT JOIN skill_has_voies as t2 ON t1.id = t2.id_skill
			WHERE t2.id_voie = :id
			ORDER BY t2.rank, t1.label;');
		$select -> bindValue(':id', $id, PDO::PARAM_STR);
		$select -> execute();
		return $select -> fetchAll();
	}

	public function getAllSkills()
	{
		$select = $this->_db->prepare('SELECT * FROM skills ORDER BY label ASC;');
		$select -> execute();
		return $select -> fetchAll();
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
}