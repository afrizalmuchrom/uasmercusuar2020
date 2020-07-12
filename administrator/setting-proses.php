<?php
  include("../koneksi.php");
  if (isset($_POST['edit'])) {
  
   
      $qedit="UPDATE admin SET username= '$_POST[username]'
      , password='$_POST[password]'
      , email='$_POST[email]'
      , perusahaan='$_POST[perusahaan]'
      , tlp='$_POST[tlp]'
      , peta='$_POST[peta]'
      , alamat='$_POST[alamat]' WHERE id = '$_POST[id]'";
      $editb=$mysqli->query($qedit);


    header("location:setting.php");

    // $qedit="UPDATE tbl_berita SET judul= '$_POST[judul]', isi='$_POST[isi]', gambar='$_POST[gambar]' WHERE id = '$_POST[id]'";
    // $editb=$mysqli->query($qedit);
  }
 ?>