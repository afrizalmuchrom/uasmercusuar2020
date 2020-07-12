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
        
        <form action="tambah-proses.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="text" required name="judul" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Judul</label>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="text" required name="isi" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">ISI</label>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="file" required name="file" id="autocomplete-input" class="autocomplete">
                </div>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12" style="text-align: justify;">
                    <input type="submit" name="tambah" value="Tambah berita" class="btn btn-primary">
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
        