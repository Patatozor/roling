<h1>Nouveau sort</h1>

<form action="<?php echo HOST ?>admin/spells/save" method="POST">
	<div>
		<input name="slabel" id="label" type="text" placeholder="Nom" /><br/>
		<textarea name="sdesc" id="description">Description du sort</textarea>
		<input name="srange" id="range" type="text" placeholder="Portée" /><br/>
		<input name="sdifficulty" id="difficulty" type="text" placeholder="difficulté" /><br/>
	</div>
	<div>
		<input name="scost" id="cost" type="text" placeholder="cost"/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>