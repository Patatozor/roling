<?php

class racesModel extends CoreModel
{
	public $_table = "races";
	
	public function insert($label,$description, $features, $str, $adr, $end, $agi, $intel, $per, $vol, $soc)
	{
		try 
		{
			$insert = $this->_db -> prepare('INSERT INTO spells (label, description, features, str, adr, end, agi, intel, per, vol, soc) 
				VALUES (:label, :description, :features, :str, :adr, :end, :agi, :intel, :per, :vol, :soc)');

			$insert -> bindValue(':label', $label, PDO::PARAM_STR);
			$insert -> bindValue(':description', $description, PDO::PARAM_STR);
			$insert -> bindValue(':features', $features, PDO::PARAM_STR);
			$insert -> bindValue(':str', $str, PDO::PARAM_INT);
			$insert -> bindValue(':adr', $adr, PDO::PARAM_INT);
			$insert -> bindValue(':end', $end, PDO::PARAM_INT);
			$insert -> bindValue(':agi', $agi, PDO::PARAM_INT);
			$insert -> bindValue(':intel', $intel, PDO::PARAM_INT);
			$insert -> bindValue(':per', $per, PDO::PARAM_INT);
			$insert -> bindValue(':vol', $vol, PDO::PARAM_INT);
			$insert -> bindValue(':soc', $soc, PDO::PARAM_INT);
			$insert -> execute();
			return $this->_db->lastInsertId();
		}
		catch (CustomException $e)
		{
			return 0;
		}
	}
	
	public function update($id, $label,$description, $features, $str, $adr, $end, $agi, $intel, $per, $vol, $soc)
	{
		try
		{
			$update = $this->_db -> prepare('UPDATE spells 
				SET label = :label, description = :description, features = :features, 
					str = :str, adr = :adr, end = :end, agi = :agi,
					intel = :intel, per = :per, vol = :vol, soc = :soc,
				WHERE id = :id');
			$update -> bindValue(':id', $id, PDO::PARAM_INT);
			$update -> bindValue(':label', $label, PDO::PARAM_STR);
			$update -> bindValue(':description', $description, PDO::PARAM_STR);
			$update -> bindValue(':features', $features, PDO::PARAM_STR);
			$update -> bindValue(':str', $str, PDO::PARAM_INT);
			$update -> bindValue(':adr', $adr, PDO::PARAM_INT);
			$update -> bindValue(':end', $end, PDO::PARAM_INT);
			$update -> bindValue(':agi', $agi, PDO::PARAM_INT);
			$update -> bindValue(':intel', $intel, PDO::PARAM_INT);
			$update -> bindValue(':per', $per, PDO::PARAM_INT);
			$update -> bindValue(':vol', $vol, PDO::PARAM_INT);
			$update -> bindValue(':soc', $soc, PDO::PARAM_INT);
			$update -> execute();
			return true;
		}
		catch (CustomException $e)
		{
			return false;
		}
	}
}