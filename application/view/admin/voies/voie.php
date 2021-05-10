<table>
	<thead>
		<tr>
			<td colspan="3"><b class="cap">Voie <?php echo $this->_data['voie']['article'].$this->_data['voie']['label'] ?></b></td>
		</tr>
	</thead>
	<?php foreach ($this->_data['skills'] as $skill) { ?>
	<tr>
		<td class="rank"><?php echo $skill['rank'] ?></td>
		<td class="skill">
			<b class="cap"><?php echo $skill['label'] ?></b> -
			<i class="cap"><?php echo $skill['type'] ?></i>
			<br/>
			<span class="description"><?php echo $skill['description'] ?></span><br/>
			<span class="restrictions"><?php echo $skill['number_of_use']?></span>
		</td>
		<td class="cost"><?php echo $skill['cost'] ?> PC</td>
	</tr>
	<?php } ?>
</table>
<form method="POST" action="../link/<?php echo $this->_data['voie']['id']; ?>">
	<select name="skill_to_link">
		<?php foreach ($this->_data['all_skills'] as $skill) { ?>
		<option value="<?php echo $skill['id'] ?>"><?php echo $skill['label'] ?></option>
		<?php } ?>
	</select>
	<input name="rank" type="number"/>
	<input type="submit" value="valider"/>
</form>
<a href="../../skills/add/<?php echo $this->_data['voie']['id']?>">Nouveau sort</a>