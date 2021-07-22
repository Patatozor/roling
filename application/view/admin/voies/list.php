<a href="add">Ajouter une voie</a>
<table>
	<tr>
		<th>Nom de la voie</th>
		<th>Actions</th>
	</tr>
	<?php foreach($this->_data as $voie) { ?>
		<tr>
			<td><a href="voie/<?php echo $voie['id']; ?>">Voie <?php echo $voie['article'].$voie['label']; ?></a></td>
			<td><a href="edit/<?php echo $voie['id']; ?>">Editer</a> <a href="delete/<?php echo $voie['id']; ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>