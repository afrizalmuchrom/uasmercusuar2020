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
        <form action="portofolio-proses.php" method="post" enctype="multipart/form-data">

      
        <div class="container">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <input type="file" id="files" name="file"  >
           
           
                <hr>
                <input type="submit" name="edit" value="Upload Gambar" class="btn btn-primary">
                </div>

               
            </div>
        </div>
        
        </form>
          
        <div class="container">
            <div class="row">
            
        <table >
        <tr>

        <th>Gambar</th>
        <th>Hapus</th>
        </tr>

        <?php
        include ("../koneksi.php");
        $query = "SELECT * FROM tbl_portofolio";
        $result=$mysqli->query($query);

        $max_bar = ceil($result->num_rows/4);

        // for ($i=0; $i < $max_bar; $i++) { 
         
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
           
        ?>
     
    <tr>
   
    <td><img src='../img/portfolio/<?= $row['gambar'] ?>' width='10%' ></td>
    <td> <a class="waves-effect waves-danger btn red" href="hapus_gambar.php?id=<?php echo $row['id'];?>">delete</a></td>

    </tr>

    

        <?php
        
       
      }
    }
    
    // } 
    $mysqli->close();
    ?>
    </table>
    </div>
    </div>

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
        