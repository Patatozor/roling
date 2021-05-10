<h1>Nouvelle compétence</h1>

<form action="<?php echo HOST ?>admin/skills/save" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" /><br/>
		<textarea name="description" id="description">Description du sort</textarea>
	</div>
	<div>
		<label for="type">Type</label>
		<select name="type" id="type">
			<option value="passif">passif</option>
			<option value="technique">technique</option>
			<option value="sort">sort</option>
			<option value="incantation">incantation</option>
			<option value="sort canalisé">sort canalisé</option>
			<option value="rituel">rituel</option>
		</select><br/>
		<input name="nb_use" id="nb_use" type="text" placeholder="Nombre d'utilisations" /><br/>
		<input name="cost" id="cost" type="number" placeholder="cost"/>
	</div>
	<div>
		<label for="voie">Voie</label>
		<select name="voie">
			<option value="0" <?php if(!isset($_GET['id'])) echo "selected"?>></option>
		<?php foreach ($this->_data['voies'] as $voie) { ?>
			<option value="<?php echo $voie['id']; ?>" <?php if(isset($_GET['id']) && $_GET['id'] == $voie['id']) echo "selected" ?>>
				Voie <?php echo $voie['article'].$voie['label'] ?>
			</option>
		<?php } ?>
		</select>
		<br/>
		<input name="rank" id="rank" type="number" placeholder="rank"/><br/>
	</div>		
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>