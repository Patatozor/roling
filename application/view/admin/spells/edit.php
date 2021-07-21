<a href="<?php echo HOST ?>admin/spells/list">Retour à la liste</a>
<h1><?php echo $this->_data['label']; ?></h1>

<form action="<?php echo HOST ?>admin/spells/save" method="POST">
	<div>
		<input type="number" name="id" value="<?php echo $this->_data['id']; ?>" /><br/>
		<input name="label" id="label" type="text" placeholder="Nom" value="<?php echo $this->_data['label']; ?>" /><br/>
		<textarea name="description" id="description"><?php echo $this->_data['description']; ?></textarea><br />
		<input name="range" id="range" type="text" placeholder="Portée" value="<?php echo $this->_data['casting_range']; ?>" /><br/>
		<input name="difficulty" id="difficulty" type="text" placeholder="Difficulté" value="<?php echo $this->_data['difficulty']; ?>" /><br/>
	</div>
	<div>
		<input name="cost" id="cost" type="text" placeholder="text" value="<?php echo $this->_data['cost']; ?>"/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>