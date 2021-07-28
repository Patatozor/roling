<form method="POST" action="../save/<?php echo $this->_data['id']; ?>">
	<label for="label">Libellé</label> <input type="text" name="slabel" id="label" value="<?php echo $this->_data['slabel']; ?>"/><br/>
	<label for="label">Article</label> <input type="text" name="sarticle" id="article" value="<?php echo $this->_data['sarticle']; ?>"/><br/>
	<label for="description">Description</label> <textarea name="sdesc" id="description"><?php echo $this->_data['sdesc']; ?></textarea>
	<input type="submit" value="Enregistrer" />
</form>
<a href="../list">Retour</a>