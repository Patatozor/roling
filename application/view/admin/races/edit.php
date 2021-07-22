<a href="<?php echo HOST ?>admin/races/list">Retour à la liste</a>
<h1><?php echo $this->_data['label']; ?></h1>

<form action="<?php echo HOST ?>admin/races/save/<?php echo $this->_data['id']; ?>" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" value="<?php echo $this->_data['label']; ?>" /><br/>
		<textarea name="description" id="description"><?php echo $this->_data['description']; ?></textarea><br />
		<textarea name="features" id="features" placeholder="Caractéristiques physique de la race"><?php echo $this->_data['features']; ?></textarea><br/>
		for: <input name="str" id="str" type="number" placeholder="Force" value="<?php echo $this->_data['str']; ?>"/><br/>
		adr: <input name="adr" id="adr" type="number" placeholder="Adresse" value="<?php echo $this->_data['adr']; ?>"/><br/>
		end: <input name="end" id="end" type="number" placeholder="Endurance" value="<?php echo $this->_data['end']; ?>"/><br/>
		agi: <input name="agi" id="agi" type="number" placeholder="Agilité" value="<?php echo $this->_data['agi']; ?>"/><br/>
		int: <input name="intel" id="intel" type="number" placeholder="Intelligence" value="<?php echo $this->_data['intel']; ?>"/><br/>
		per: <input name="per" id="per" type="number" placeholder="Perception" value="<?php echo $this->_data['per']; ?>"/><br/>
		vol: <input name="vol" id="vol" type="number" placeholder="Volonté" value="<?php echo $this->_data['vol']; ?>"/><br/>
		cha: <input name="cha" id="cha" type="number" placeholder="Social" value="<?php echo $this->_data['cha']; ?>"/><br/>
	</div>
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>