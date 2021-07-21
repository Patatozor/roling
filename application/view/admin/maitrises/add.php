<h1>Nouvelle maitrise</h1>

<form action="<?php echo HOST ?>admin/maitrises/save" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" /><br/>
		<textarea name="description" id="description">Description de la maitrise</textarea>
	</div>
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>