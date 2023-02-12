<table class="table">
	<thead>
	<tr>
		<th scope="col">ID</th>
		<th scope="col">Partner Name</th>
		<th scope="col">Partner ID</th>
		<th scope="col">Key ID</th>
		<th scope="col">Wallet</th>
		<th scope="col"></th>
		<th scope="col"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($partners as $row) { ?>
		<tr>
			<th scope="row"><?= $row->id ?></th>
			<td><?= $row->partner_name ?></td>
			<td><?= $row->domain ?></td>
			<td><?= $row->keyID ?></td>
			<td><?= $row->wallet ?></td>
			<td>
				<a href="<?= base_url("v1/dashboard/edit/" . $row->id) ?>"
				   type="submit" class="btn btn-warning btn-sm">Edit</a></form>
			</td>
			<td>
				<a href="<?= base_url("v1/dashboard/edit/" . $row->id) ?>"
				   type="submit" class="btn btn-danger btn-sm">Delete</a></form>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
