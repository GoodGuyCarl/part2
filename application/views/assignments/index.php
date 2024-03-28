<main class="container mx-auto">
	<h1>All Assignments</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Assignment</th>
				<th>Sequence num</th>
				<th>Level</th>
				<th>Track</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($assignments as $assignment): ?>
				<tr>
					<td><?= $assignment['assignment'] ?></td>
					<td><?= $assignment['sequence_number'] ?></td>
					<td><?= $assignment['level'] ?></td>
					<td><?= $assignment['track'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<form class="text-center" action="<?= base_url('/' . $rows) ?>" method="post">
		<input class="btn btn-primary" type="submit" value="Load More">
	</form>
</main>
