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

      <title>UTS Company Profie</title>
    </head>

    <body id="home" class="scrollspy">
        <?php include ("header.php");?>
        <?php
            include ("../koneksi.php");
            $query="SELECT * FROM admin ";
            // $query="SELECT * FROM tbl_berita";
            $result=$mysqli->query($query);
            $row = mysqli_fetch_assoc($result);
            $id=$row['id'];
            $judul=$row['username'];
            $isi=$row['password'];
            $perusahaan=$row['perusahaan'];
            $tlp=$row['tlp'];
            $email=$row['email'];
            $alamat=$row['alamat'];
            $peta=$row['peta'];
        
        ?>
        <form action="setting-proses.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="text" name="perusahaan" value="<?php echo $perusahaan; ?>" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">perusahaan</label>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="email" name="email" value="<?php echo $email; ?>" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">email</label>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="text" name="tlp" value="<?php echo $tlp; ?>" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Telepon</label>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="text" name="alamat" value="<?php echo $alamat; ?>" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">alamat</label>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea name="peta"><?php echo $peta; ?></textarea>
             
                <label for="autocomplete-input">Peta</label>
                </div>
            </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="text" name="username" value="<?php echo $judul; ?>" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Username</label>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="text" name="password" value="<?php echo $isi; ?>" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Password</label>
                </div>
            </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col s12" style="text-align: justify;">
                    <input type="submit" name="edit" value="Simpan Pengaturan" class="btn btn-primary">
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
        