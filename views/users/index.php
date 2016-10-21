<h2>Listado de usuarios</h2>

<table>
		<tr>
			<th>Username</th>
			<th>Password</th>
		</tr>


<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user;?> </td>
		<td></td>

	</tr>
		<?php endforeach; ?>
</table>

