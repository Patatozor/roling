<?php if($this->_data){ ?>
Erreur: <?php echo $this->_data ?>
<?php }?>

<form method="POST" action="save">
	<label for="label">Libellé</label> <input type="text" name="label" id="label"/><br/>
	<label for="label">Article</label> <input type="text" name="article" id="article"/><br/>
	<label for="label">Description</label> <textarea name="description" id="description"></textarea>
	<input type="submit" value="Enregistrer" />
</form>