<div class="container">
    <div class="row">
	
    <br><br>
	
		<h3 class="light center grey-text text-darken-3">List Artikel <a class="waves-effect waves-danger btn warning" href="tambah.php">Tambah</a></h3>
        
        <?php
        include ("../koneksi.php");
        $query = "SELECT * FROM tbl_berita ORDER BY id DESC";
        $result=$mysqli->query($query);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
        ?>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons"></i>
                <a href="read.php?id=<?php echo $row['id'];?>"><img style="align-items: center;" src="../img/<?php echo $row['gambar'];?>" width="80px" height="100px"></a>
                <h5><?php echo $row['judul'];?></h5>
                <p style="text-align: justify;"><?php echo $row['isi'];?></p>
                <div class="container">
                    <div class="row">
                        <div class="col s6" style="text-align: justify;">
                            <a class="waves-effect waves-light btn" href="edit.php?id=<?php echo $row['id'];?>">edit</a>
                        </div>
                        <div class="col s6" style="text-align: justify;">
                            <a class="waves-effect waves-danger btn red" href="hapus.php?id=<?php echo $row['id'];?>">delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
        }
        $mysqli->close();
        ?>
   </div>
            

    </div>
    </div>
</div></div>