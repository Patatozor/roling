<a href="<?php echo HOST ?>admin/spells/list/<?php echo $this->_data['id']; ?>">Retour à la liste</a>
<h1><?php echo $this->_data['slabel']; ?></h1>

<form action="<?php echo HOST ?>admin/spells/save" method="POST">
	<div>
		<input name="slabel" id="label" type="text" placeholder="Nom" value="<?php echo $this->_data['slabel']; ?>" /><br/>
		<textarea name="sdesc" id="description"><?php echo $this->_data['sdesc']; ?></textarea><br />
		<input name="srange" id="range" type="text" placeholder="Portée" value="<?php echo $this->_data['srange']; ?>" /><br/>
		<input name="sdifficulty" id="difficulty" type="text" placeholder="Difficulté" value="<?php echo $this->_data['sdifficulty']; ?>" /><br/>
	</div>
	<div>
		<input name="scost" id="cost" type="text" placeholder="text" value="<?php echo $this->_data['scost']; ?>"/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>