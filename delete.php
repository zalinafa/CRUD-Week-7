<<?php 
//memanggil fungsi yang ada pada functions.php
require 'functions.php';

//mengambil data id yang akan dihapus dari URL
$id = $_GET["id"];

// cek apakah data berhasil didelete atau tidak
if (delete ($id)> 0 ){
	echo "
      <script> 
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
      </script>";
}else{
     echo "
      <script> 
          alert('data gagal dihapus');
          document.location.href = 'index.php';
      </script>";
    }

 ?>