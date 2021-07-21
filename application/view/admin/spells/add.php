<h1>Nouveau sort</h1>

<form action="<?php echo HOST ?>admin/spells/save" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" /><br/>
		<textarea name="description" id="description">Description du sort</textarea>
		<input name="range" id="range" type="text" placeholder="Portée" /><br/>
		<input name="difficulty" id="difficulty" type="text" placeholder="difficulté" /><br/>
	</div>
	<div>
		<input name="cost" id="cost" type="text" placeholder="cost"/>
	</div>	
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>