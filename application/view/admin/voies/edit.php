<form method="POST" action="../save/<?php echo $this->_data['id']; ?>">
	<label for="label">Libellé</label> <input type="text" name="label" id="label" value="<?php echo $this->_data['label']; ?>"/><br/>
	<label for="label">Article</label> <input type="text" name="article" id="article" value="<?php echo $this->_data['article']; ?>"/><br/>
	<label for="description">Description</label> <textarea name="description" id="description"><?php echo $this->_data['description']; ?></textarea>
	<input type="submit" value="Enregistrer" />
</form>
<a href="../list">Retour</a>