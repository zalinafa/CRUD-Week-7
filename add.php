<?php
//memanggil fungsi yang ada pada functions.php
require 'functions.php';
  
  //cek apakah tombol submit sudah ditekan atau belum
  if(isset($_POST["submit"])){

 // cek apakah data berhasil ditambahkan atau tidak
 if(insert($_POST) > 0){
      echo "
      <script> 
          alert('data berhasil ditambahkan');
          document.location.href = 'index.php';
      </script>";

    }else{
     echo "
      <script> 
          alert('data gagal ditambahkan');
          document.location.href = 'index.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form action="" method="post">

  <label for="nim">NIM</label><br>
  <input type="text" id="nim" name="nim"><br><br>

  <label for="student_name">Name:</label><br>
  <input type="text" id="student_name" name="student_name"><br><br>

  <label for="gender">Gender</label><br>
  <input type="text" id="gender" name="gender"><br><br>

  <button type="submit" name="submit"> Submit</button>
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/index.php".</p>

</body>
</html>
