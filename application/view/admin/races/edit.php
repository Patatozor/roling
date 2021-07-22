<a href="<?php echo HOST ?>admin/races/list/<?php echo $this->_data['id']; ?>">Retour à la liste</a>
<h1><?php echo $this->_data['label']; ?></h1>

<form action="<?php echo HOST ?>admin/races/save" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" value="<?php echo $this->_data['label']; ?>" /><br/>
		<textarea name="description" id="description"><?php echo $this->_data['description']; ?></textarea><br />
		<textarea name="features" id="features" placeholder="Caractéristiques physique de la race"><?php echo $this->_data['features']; ?></textarea><br/>
		<input name="str" id="str" type="number" placeholder="Force" value="<?php echo $this->_data['str']; ?>"/><br/>
		<input name="adr" id="adr" type="number" placeholder="Adresse" value="<?php echo $this->_data['adr']; ?>"/><br/>
		<input name="end" id="end" type="number" placeholder="Endurance" value="<?php echo $this->_data['end']; ?>"/><br/>
		<input name="agi" id="agi" type="number" placeholder="Agilité" value="<?php echo $this->_data['agi']; ?>"/><br/>
		<input name="intel" id="intel" type="number" placeholder="Intelligence" value="<?php echo $this->_data['intel']; ?>"/><br/>
		<input name="per" id="per" type="number" placeholder="Perception" value="<?php echo $this->_data['per']; ?>"/><br/>
		<input name="vol" id="vol" type="number" placeholder="Volonté" value="<?php echo $this->_data['vol']; ?>"/><br/>
		<input name="soc" id="soc" type="number" placeholder="Social" value="<?php echo $this->_data['soc']; ?>"/><br/>
	</div>
	<div>
		<input name="cost" id="cost" type="text" placeholder="text" value="<?php echo $this->_data['cost']; ?>"/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>