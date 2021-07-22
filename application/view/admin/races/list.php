<h1>Liste des races</h1>
<a href="add">Ajouter une race</a>

<table>
	<tr>
		<th>Nom de la race</th>
		<th>FOR</th>
		<th>ADR</th>
		<th>END</th>
		<th>AGI</th>
		<th>INT</th>
		<th>PER</th>
		<th>VOL</th>
		<th>CHA</th>
		<th>Actions</th>
	</tr>
	<?php foreach($this->_data as $race) { ?>
		<tr>
			<td class="align-center"><?php echo $race['label']; ?></td>
			<td class="align-center"><?php echo $race['str']; ?></td>
			<td class="align-center"><?php echo $race['adr']; ?></td>
			<td class="align-center"><?php echo $race['end']; ?></td>
			<td class="align-center"><?php echo $race['agi']; ?></td>
			<td class="align-center"><?php echo $race['intel']; ?></td>
			<td class="align-center"><?php echo $race['per']; ?></td>
			<td class="align-center"><?php echo $race['vol']; ?></td>
			<td class="align-center"><?php echo $race['cha']; ?></td>
			<td><a href="edit/<?php echo $race['id']; ?>">Editer</a> <a href="delete/<?php echo $race['id']; ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>