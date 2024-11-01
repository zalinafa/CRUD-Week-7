<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_student");

function query ($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$Srows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
	$rows[] = $row;
	}
	return $rows;
}

function insert ($data){
	global $conn;

	$nim = htmlspecialchars ($data["nim"]);
	$student_name = htmlspecialchars ($data["student_name"]);
	$gender = htmlspecialchars ($data["gender"]);

	$query = "INSERT INTO tb_student
				VALUES
				('0', '$nim', '$student_name', '$gender')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function delete ($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_student WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function update ($data){
	global $conn;

	$id =$data["id"];
	$nim = htmlspecialchars ($data["nim"]);
	$student_name = htmlspecialchars ($data["student_name"]);
	$gender = htmlspecialchars ($data["gender"]);

	$query = "UPDATE tb_student SET
				nim = '$nim',
				student_name = '$student_name',
				gender = '$gender'
			  WHERE id = $id
 				 ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>