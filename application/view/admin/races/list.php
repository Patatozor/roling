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
			<td class="align-center"><?php echo $race['slabel']; ?></td>
			<td class="align-center"><?php echo $race['ifor']; ?></td>
			<td class="align-center"><?php echo $race['iadr']; ?></td>
			<td class="align-center"><?php echo $race['iend']; ?></td>
			<td class="align-center"><?php echo $race['iagi']; ?></td>
			<td class="align-center"><?php echo $race['iint']; ?></td>
			<td class="align-center"><?php echo $race['iper']; ?></td>
			<td class="align-center"><?php echo $race['ivol']; ?></td>
			<td class="align-center"><?php echo $race['icha']; ?></td>
			<td><a href="edit/<?php echo $race['id']; ?>">Editer</a> <a href="delete/<?php echo $race['id']; ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>