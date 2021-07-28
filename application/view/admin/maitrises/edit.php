<a href="<?php echo HOST ?>admin/maitrises/list">Retour à la liste</a>
<h1><?php echo $this->_data['slabel']; ?></h1>

<form action="<?php echo HOST ?>admin/maitrises/save/<?php echo $this->_data['id']; ?>" method="POST">
	<div>
		<textarea name="sdesc" id="description"><?php echo $this->_data['sdesc']; ?></textarea><br /><br/>
		<input name="slabel" id="label" type="text" placeholder="Nom" value="<?php echo $this->_data['slabel']; ?>" /><br/>
	</div>
	<input type="submit" value="Enregistrer" />
</form>

<?php print_r($this->_data); ?>