<!-- About Us -->
<div id="about" class="parallax-container scrollspy" style="height: 500px;">
<div class="parallax"><img src="img/about.jpg"></div>
<?php
            include ("koneksi.php");
            $query="SELECT * FROM tbl_about";
            $result=$mysqli->query($query);
            $row = mysqli_fetch_assoc($result);
            $id=$row['id'];
            $judul=$row['about'];
            $visi=$row['visi'];
            $misi=$row['misi'];
            
        ?>
<div class="container" style="text-align: justify;">
	<div class="row">
	<h3 class="center">About Us</h3>
		<div class="cool m6 light">
		<p><b> <?= $judul ?></p></b>
		<h5 align="center">VISION</h5>
		<p><b><?= $visi ?> </p></b>
		<h5 align="center">MISSION</h5>
        <p align="center"><b><?= $misi ?></p></b>
	</div>
    </div>
</div>