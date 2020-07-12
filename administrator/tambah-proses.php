<?php
include("../koneksi.php");
if (isset($_POST['tambah'])) {
  $judul=$_POST['judul'];
  $isi=$_POST['isi'];
 
  $ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
  $gb = $_FILES['file']['name'];
  $x = explode('.', $gb);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

      $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal,gambar) VALUES ('$judul', '$isi' ,now(), '$gb')");
      move_uploaded_file($file_tmp, '../img/'.$gb);
      // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
      if($perintah){
        $status = 'FILE BERHASIL DI UPLOAD';
      }else{
        $status = 'GAGAL MENGUPLOAD GAMBAR';
        echo("Error description: " . $mysqli -> error);
      }
      echo $status;

  }else{
    $status = 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
  }

  header("Location: index.php");
}
// $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal) VALUES ('$judul', '$isi' ,now())");

?>