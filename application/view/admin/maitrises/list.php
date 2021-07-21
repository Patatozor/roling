<a href="add">Ajouter une maitrise</a>
<table>
	<tr>
		<th>Nom de la maitrise</th>
		<th>Description</th>
		<th>Actions</th>
	</tr>
	<?php foreach($this->_data as $maitrise) { ?>
		<tr>
			<td><?php echo $maitrise['label']; ?></td>
			<td><?php echo $maitrise['description']; ?></td>
			<td><a href="edit/<?php echo $maitrise['id']; ?>">Editer</a> <a href="delete/<?php echo $maitrise['id']; ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>