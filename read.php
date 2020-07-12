<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


      <!--my CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>UTS Company Profie</title>
    </head>

    <body id="home" class="scrollspy">
      <?php include ("html/header.php");?>
      <!--slider-->
      <?php //include ("html/slider.html");?>

      <?php 
        //include ("html/slider.php");
        include "koneksi.php";
        $query="SELECT * FROM tbl_berita WHERE id = '$_GET[id]'";
        $result=$mysqli->query($query);
        $row = mysqli_fetch_assoc($result);
        $id=$row['id'];
        $judul=$row['judul'];
        $isi=$row['isi'];
        $gmb=$row['gambar'];
      ?>
        <div class="col m12 s12">
            <div class="card-panel center">
                <i class="material-icons"></i>
                <a href="read.php?id=<?php echo $row['id'];?>"><img style="align-items: center;" src="img/<?php echo $row['gambar'];?>" width="800px" height="400px"></a>
                <h5><?php echo $row['judul'];?></h5>
                <p style="text-align: justify;"><?php echo $row['isi'];?></p>
                <!-- <a class="waves-effect waves-light btn" href="edit.php?id=<?php echo $row['id'];?>">Read</a> -->
            </div>
        </div>
      
    <!-- Footer -->
      <footer class="grey darken-4 white-text center" style="height: 120px>
        <p class="flow-text">Web Programming Reskia Juliana. Copyright 2020.</p>
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);


      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 550,
        transition: 600,
        interval: 3000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
        scrollOffset: 40
      });

      </script>
    </body>
  </html>
        