<?php
  include("../koneksi.php");
  if (isset($_POST['edit'])) {
    $ekstensi_diperbolehkan	= array('png','jpg','JPG', 'jpeg');
    $gb = $_FILES['file']['name'];
    $x = explode('.', $gb);
    $ekstensi = strtolower(end($x));
    var_dump($x);
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
   
    if($ekstensi == "")
    {
     
      $qedit="UPDATE tbl_berita SET judul= '$_POST[judul]', isi='$_POST[isi]' WHERE id = '$_POST[id]'";
      $editb=$mysqli->query($qedit);
    }
    else
    {
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          // if($ukuran < 1044070){
         
  
            move_uploaded_file($file_tmp, '../img/'.$gb);
            $qedit="UPDATE tbl_berita SET judul= '$_POST[judul]', isi='$_POST[isi]', gambar='$gb' WHERE id = '$_POST[id]'";
            $editb=$mysqli->query($qedit);
            // $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal,gambar) VALUES ('$judul', '$isi' ,now(), '$gb')");
            // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
              //   if($perintah){
              //     echo 'FILE BERHASIL DI UPLOAD';
              //   }else{
              //     echo 'GAGAL MENGUPLOAD GAMBAR';
              //   }
          // }else{
          //   echo 'UKURAN FILE TERLALU BESAR';
          // }
      }else{
          header("location:edit.php?id=$_POST[id]");
          
      }

    }
    header("location:index.php");

    // $qedit="UPDATE tbl_berita SET judul= '$_POST[judul]', isi='$_POST[isi]', gambar='$_POST[gambar]' WHERE id = '$_POST[id]'";
    // $editb=$mysqli->query($qedit);
  }
 ?>