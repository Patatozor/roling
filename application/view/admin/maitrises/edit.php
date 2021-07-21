<a href="<?php echo HOST ?>admin/maitrises/list">Retour à la liste</a>
<h1><?php echo $this->_data['label']; ?></h1>

<form action="<?php echo HOST ?>admin/maitrises/save/<?php echo $this->_data['id']; ?>" method="POST">
	<div>
		<input name="label" id="label" type="text" placeholder="Nom" value="<?php echo $this->_data['label']; ?>" /><br/>
		<textarea name="description" id="description"><?php echo $this->_data['description']; ?></textarea><br /><br/>
	</div>
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>