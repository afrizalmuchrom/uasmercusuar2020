<div class="slider" class="parallax-container scrollspy">
    <ul class="slides">
      <li>
        <img src="img/slider/proyek1.jpg"> 
        <div class="caption right-align">
          <h3>General Contractor</h3>
        </div>
      </li>
      <li>
        <img src="img/slider/proyek2.jpg"> 
        <div class="caption left-align">
          <h3>Repair Structure</h3>
        </div>
      </li>
     <li>
        <img src="img/slider/proyek3.jpg"> 
        <div class="caption center-align">
          <h3>Supplier</h3>
        </div>
      </li>
    </ul>
  </div>  
  <div class="container">
    <div class="row">
	
    <br><br>
	
		<h3 class="light center grey-text text-darken-3">List Artikel</h3>
        
        <?php
        include ("koneksi.php");
        $query = "SELECT * FROM tbl_berita ORDER BY id DESC";
        $result=$mysqli->query($query);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
        ?>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons"></i>
                <a href="read.php?id=<?php echo $row['id'];?>"><img style="align-items: center;" src="img/<?php echo $row['gambar'];?>" width="80px" height="100px"></a>
                <h5><?php echo $row['judul'];?></h5>
                <p style="text-align: justify;"><?php echo $row['isi'];?></p>
                <a class="waves-effect waves-light btn" href="read.php?id=<?php echo $row['id'];?>">read</a>
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