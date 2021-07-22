<h1>Liste des races</h1>
<a href="add">Ajouter une race</a>

<table>
	<tr>
		<th>Nom de la race</th>
		<th>Actions</th>
	</tr>
	<?php foreach($this->_data as $race) { ?>
		<tr>
			<td><?php echo $race['label']; ?></td>
			<td><a href="edit/<?php echo $race['id']; ?>">Editer</a> <a href="delete/<?php echo $race['id']; ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>