<?php
require 'functions.php';

// query untuk mengambil data dari tabel student
$mahasiswa = query ("SELECT * FROM tb_student");
?>

<!DOCTYPE html>
<html>
<head>
	<!-- bootstrap css dan js */ -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

<h1>Week 7 CRUD - Student Information</h1>

<!-- link untuk mengarahkan ke halaman add student -->
<a href="add.php">Add Student</a><br><br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>NIM</th>
		<th>Student Name</th>
		<th>Gender</th>
		<th>Action</th>
	</tr>

<!-- perulangan untuk mengambil seluruh data pada database -->
<?php $i = 1; ?>
<?php foreach ($mahasiswa as $mhsw) : ?>

	<tr>
		<td><?= $mhsw["id"]; ?></td>
		<td><?= $mhsw["nim"]; ?></td>	
		<td><?= $mhsw["student_name"]; ?></td>
		<td><?= $mhsw["gender"]; ?></td>
		<td>
			<a href="edit.php?id=<?= $mhsw["id"]; ?>">Edit</a>|
			<a href="delete.php?id=<?= $mhsw["id"]; ?>">Delete</a>
		</td>
		
	</tr>

<?php endforeach; ?>

</table>

</body>
</html>
