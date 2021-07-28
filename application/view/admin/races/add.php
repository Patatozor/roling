<h1>Nouvelle race</h1>

<form action="<?php echo HOST ?>admin/races/save" method="POST">
	<div>
		<input name="slabel" id="label" type="text" placeholder="Nom" /><br/>
		<textarea name="sdesc" id="description" placeholder="Description de la race"></textarea><br />
		<textarea name="sfeatures" id="features" placeholder="Caractéristiques physique de la race"></textarea><br />
		for: <input name="ifor" id="str" type="number" placeholder="Force" /><br/>
		adr: <input name="iadr" id="adr" type="number" placeholder="Adresse" /><br/>
		end: <input name="iend" id="end" type="number" placeholder="Endurance" /><br/>
		agi: <input name="iagi" id="agi" type="number" placeholder="Agilité" /><br/>
		int: <input name="iint" id="intel" type="number" placeholder="Intelligence" /><br/>
		per: <input name="iper" id="per" type="number" placeholder="Perception" /><br/>
		vol: <input name="ivol" id="vol" type="number" placeholder="Volonté" /><br/>
		cha: <input name="icha" id="cha" type="number" placeholder="Charisme" /><br/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>