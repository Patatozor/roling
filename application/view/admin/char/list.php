<a href="add">Créer un personnage</a>
<table>
	<tr>
		<th>Nom du personnage</th>
		<th>Race du personnage</th>
		<th>Niveau</th>
		<th>Actions</th>
	</tr>
	<?php foreach($this->_data as $classe) { ?>
		<tr>
			<td><a href="show/<?php echo $char['id']; ?>"><?php echo $char['name']; ?></a></td>
			<td><?php echo $char['race']; ?></td>
			<td><a href="edit/<?php echo $char['id']; ?>">Editer</a> <a href="delete/<?php echo $char['id']; ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>