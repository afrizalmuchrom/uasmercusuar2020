<?php
  include("../koneksi.php");
  if (isset($_POST['edit'])) {

   
    if($ekstensi == "")
    {
     
      $qedit="UPDATE tbl_about SET about= '$_POST[about]', visi='$_POST[visi]',misi='$_POST[misi]' WHERE id = '$_POST[id]'";
      $editb=$mysqli->query($qedit);
    }
 
    header("location:about.php");

    // $qedit="UPDATE tbl_berita SET judul= '$_POST[judul]', isi='$_POST[isi]', gambar='$_POST[gambar]' WHERE id = '$_POST[id]'";
    // $editb=$mysqli->query($qedit);
  }
 ?>