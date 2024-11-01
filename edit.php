<?php
require 'functions.php';

//mengambil data id yang akan diubah dari URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM tb_student WHERE id =$id")[0];

 //cek apakah tombol update data sudah ditekan atau belum
  if(isset($_POST["submit"])){

 // cek apakah data berhasil diubah atau tidak
 if(update($_POST) > 0){
      echo "
      <script> 
          alert('data berhasil diubah');
          document.location.href = 'index.php';
      </script>";

    }else{
     echo "
      <script> 
          alert('data gagal diubah');
          document.location.href = 'index.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<body>

<h2>Ubah Data Mahasiswa</h2>

<form action="" method="post">

  <input type="hidden" name="id" 
  value="<?= $mhs["id"]; ?>">

  <label for="nim">NIM</label><br>
  <input type="text" id="nim" name="nim" required 
  value="<?= $mhs["nim"]; ?>"><br><br>

  <label for="student_name">Name:</label><br>
  <input type="text" id="student_name" name="student_name" required 
  value="<?= $mhs["student_name"]; ?>"><br><br>

  <label for="gender">Gender</label><br>
  <input type="text" id="gender" name="gender" required 
  value="<?= $mhs["gender"]; ?>"><br><br>

  <button type="submit" name="submit"> Update Data</button>
</form> 

<p>If you click the "Edit" button, the form-data will be sent to a page called "/index.php".</p>

</body>
</html>
