<?php

class skillsModel extends CoreModel
{
	public $_table = "skills";

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