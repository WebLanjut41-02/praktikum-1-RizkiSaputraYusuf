<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="kuy">Username</th>
					<th scope="kuy">Password</th>
					<th scope="kuy">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<td><?php echo $this->session->userdate('username') ?></td>
				<td><?php echo $this->session->userdate('password') ?></td>
				<td><a href="index.html"><button type="button" class="btn-primary">Edit</button></a></td>
			</tr>
			</tbody>
		</table>
	</div>

</body>
</html>