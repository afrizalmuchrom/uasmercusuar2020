<!-- portfolio -->
<section id="portfolio" class="portfolio scrollspy">
 <div class="container">
 <br><br>
    <h3 class="light center grey-text text-darken-3">Our Portfolio</h3>
    <div class="row">
    <?php
        include ("koneksi.php");
        $query = "SELECT * FROM tbl_portofolio";
        $result=$mysqli->query($query);

        $max_bar = ceil($result->num_rows/4);

        // for ($i=0; $i < $max_bar; $i++) { 
         
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
           
        ?>
      <div class="col m3 s12">
      <img src="img/portfolio/<?= $row['gambar'] ?>" class="responsive-img materialboxed"><br>
      </div>
    

    

        <?php
        
       
      }
    }
    
    // } 
    $mysqli->close();
    ?>

    </div>
	  
    

   </div>
</section>
