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
      if(isset($_GET['page'])){
        switch ($_GET["page"]) {
          case 'about':
            include ("html/about.php");
            break;
          case 'clients':
            include ("html/client.php");
            break;
          case 'services':
            include ("html/service.php");
            break;
          case 'portfolio':
            include ("html/portofolio.php");
            break;
          case 'contact':
            include ("html/contact.php");
            break;
          case 'login':
            include ("html/login.php");
            break;
          default:
            include ("html/404.php");
            break;
        }
      }else {
      include ("html/slider.php");
      }
      ?>


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
        