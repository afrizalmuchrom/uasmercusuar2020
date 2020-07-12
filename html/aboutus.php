<!-- About Us -->
	<style>
		body {
			 background-image: url(about.jpg)
			 background-size:cover;
			 background-attachment: fixed;
	<div class="container" style="text-align: justify;">
	<div class="row">

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
	<h3 class="center">About Us</h3>
		<div class="cool m6 light">
		<p><b> <?= $judul ?></p></b>
		<h5 align="center">VISION</h5>
		<p><b><?= $visi ?></p></b>
		<h5 align="center">MISSION</h5>
        <p align="center"><b><?= $misi ?></p></b>
	</div>
    </div>
</div>