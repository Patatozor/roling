<a href="<?php echo HOST ?>admin/races/list">Retour à la liste</a>
<h1><?php echo $this->_data['slabel']; ?></h1>

<form action="<?php echo HOST ?>admin/races/save/<?php echo $this->_data['id']; ?>" method="POST">
	<div>
		<input name="slabel" id="label" type="text" placeholder="Nom" value="<?php echo $this->_data['label']; ?>" /><br/>
		<textarea name="sdesc" id="description"><?php echo $this->_data['description']; ?></textarea><br />
		<textarea name="sfeatures" id="features" placeholder="Caractéristiques physique de la race"><?php echo $this->_data['features']; ?></textarea><br/>
		for: <input name="ifor" id="str" type="number" placeholder="Force" value="<?php echo $this->_data['str']; ?>"/><br/>
		adr: <input name="iadr" id="adr" type="number" placeholder="Adresse" value="<?php echo $this->_data['adr']; ?>"/><br/>
		end: <input name="iend" id="end" type="number" placeholder="Endurance" value="<?php echo $this->_data['end']; ?>"/><br/>
		agi: <input name="iagi" id="agi" type="number" placeholder="Agilité" value="<?php echo $this->_data['agi']; ?>"/><br/>
		int: <input name="iint" id="intel" type="number" placeholder="Intelligence" value="<?php echo $this->_data['intel']; ?>"/><br/>
		per: <input name="iper" id="per" type="number" placeholder="Perception" value="<?php echo $this->_data['per']; ?>"/><br/>
		vol: <input name="ivol" id="vol" type="number" placeholder="Volonté" value="<?php echo $this->_data['vol']; ?>"/><br/>
		cha: <input name="icha" id="cha" type="number" placeholder="Social" value="<?php echo $this->_data['cha']; ?>"/><br/>
	</div>
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>