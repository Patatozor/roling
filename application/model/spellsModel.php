<?php

class spellsModel extends CoreModel
{
	public $_table = "spells";

	public function link_voie_spell($id_spell, $id_voie, $rank)
	{
		try {
			$insert = $this->_db -> prepare('INSERT INTO spell_has_voies (id_spell, id_voie, rank) 
				VALUES (:id_spell, :id_voie, :rank)');
			$insert -> bindValue(':id_spell', $id_spell, PDO::PARAM_INT);
			$insert -> bindValue(':id_voie', $id_voie, PDO::PARAM_INT);
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