<h1>Nouvelle race</h1>

<form action="<?php echo HOST ?>admin/races/save" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" /><br/>
		<textarea name="description" id="description" placeholder="Description de la race"></textarea><br />
		<textarea name="features" id="features" placeholder="Caractéristiques physique de la race"></textarea><br />
		for: <input name="str" id="str" type="number" placeholder="Force" /><br/>
		adr: <input name="adr" id="adr" type="number" placeholder="Adresse" /><br/>
		end: <input name="end" id="end" type="number" placeholder="Endurance" /><br/>
		agi: <input name="agi" id="agi" type="number" placeholder="Agilité" /><br/>
		int: <input name="intel" id="intel" type="number" placeholder="Intelligence" /><br/>
		per: <input name="per" id="per" type="number" placeholder="Perception" /><br/>
		vol: <input name="vol" id="vol" type="number" placeholder="Volonté" /><br/>
		cha: <input name="cha" id="cha" type="number" placeholder="Charisme" /><br/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>