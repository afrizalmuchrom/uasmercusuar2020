<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>


      <!--my CSS -->
      <link rel="stylesheet" href="../css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
      img {
      border-radius: 8px;
    }
      </style>
      <title>UTS Company Profie</title>
    </head>

    <body id="home" class="scrollspy">
        <?php include ("header.php");?>
        <?php
            include ("../koneksi.php");
            $query="SELECT * FROM tbl_about";
            $result=$mysqli->query($query);
            $row = mysqli_fetch_assoc($result);
            $id=$row['id'];
            $judul=$row['about'];
            $visi=$row['visi'];
            $misi=$row['misi'];
            
        ?>
        <form action="edit-about.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea name="about" rows="4" cols="50"><?php echo $judul; ?></textarea>
                <!-- <input type="text" name="judul" value="<?php echo $judul; ?>" id="autocomplete-input" class="autocomplete"> -->
                <label for="autocomplete-input">About</label>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea name="visi" ><?php echo $visi; ?></textarea>
                <!-- <input type="text" name="isi" value="<?php echo $isi; ?>" id="autocomplete-input" class="autocomplete"> -->
                <label for="autocomplete-input">VISI</label>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea name="misi" ><?php echo $misi; ?></textarea>
                <!-- <input type="text" name="isi" value="<?php echo $isi; ?>" id="autocomplete-input" class="autocomplete"> -->
                <label for="autocomplete-input">MISI</label>
                </div>
            </div>
            </div>
        </div>
      
        <div class="container">
            <div class="row">
                <div class="col s12" style="text-align: justify;">
                    <input type="submit" name="edit" value="edit about" class="btn btn-primary">
                </div>
                <!-- <div class="col s6" style="text-align: justify;">
                    
                </div> -->
            </div>
        </div>
        
        </form>
       


    <!-- Footer -->
    <footer class="grey darken-4 white-text center" style="height: 80px">
                <p class="flow-text">Web Programming Reskia Juliana. Copyright 2020.</p>
            </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
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
        