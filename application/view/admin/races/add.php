<h1>Nouveau sort</h1>

<form action="<?php echo HOST ?>admin/races/save" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" /><br/>
		<textarea name="description" id="description" placeholder="Description de la race"></textarea>
		<textarea name="features" id="features" placeholder="Caractéristiques physique de la race"></textarea>
		<input name="str" id="str" type="number" placeholder="Force" /><br/>
		<input name="adr" id="adr" type="number" placeholder="Adresse" /><br/>
		<input name="end" id="end" type="number" placeholder="Endurance" /><br/>
		<input name="agi" id="agi" type="number" placeholder="Agilité" /><br/>
		<input name="intel" id="intel" type="number" placeholder="Intelligence" /><br/>
		<input name="per" id="per" type="number" placeholder="Perception" /><br/>
		<input name="vol" id="vol" type="number" placeholder="Volonté" /><br/>
		<input name="soc" id="soc" type="number" placeholder="Social" /><br/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>