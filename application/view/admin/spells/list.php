<h1>Liste des sorts</h1>
<a href="add">Ajouter un sort</a>
<a href="../voies/list">Liste des voies</a>

<table>
	<tr>
		<th>Nom du sort</th>
		<th>Score de réussite</th>
		<th>Description</th>
		<th>Actions</th>
	</tr>
	<?php foreach($this->_data as $spell) { ?>
		<tr>
			<td><?php echo $spell['slabel']; ?></td>
			<td class="align-center"><?php echo $spell['sdifficulty']; ?></td>
			<td><?php echo $spell['sdesc']; ?><br/><span class="small">Portée du sort: <?php echo $spell['srange']; ?><br />Coût en points de magie: <?php echo $spell['scost']; ?></span></td>
			<td><a href="edit/<?php echo $spell['id']; ?>">Editer</a> <a href="delete/<?php echo $spell['id']; ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>