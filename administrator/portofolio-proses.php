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
  
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        
         
        $perintah = mysqli_query($mysqli, "INSERT INTO tbl_portofolio (gambar) VALUES ('$gb')");
        move_uploaded_file($file_tmp, '../img/portfolio/'.$gb);
        // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
        if($perintah){
          $status = 'FILE BERHASIL DI UPLOAD';
        }else{
          $status = 'GAGAL MENGUPLOAD GAMBAR';
          echo("Error description: " . $mysqli -> error);
        }
     
      }else{
          header("location:edit.php?id=$_POST[id]");
          
      }

    
    header("location:portofolio.php");
    //tes

  }
 ?>