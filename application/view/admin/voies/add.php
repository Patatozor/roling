<?php if($this->_data){ ?>
Erreur: <?php echo $this->_data ?>
<?php }?>

<form method="POST" action="save">
	<label for="label">Libellé</label> <input type="text" name="slabel" id="label"/><br/>
	<label for="label">Article</label> <input type="text" name="sarticle" id="article"/><br/>
	<label for="label">Description</label> <textarea name="sdesc" id="description"></textarea>
	<input type="submit" value="Enregistrer" />
</form>