<!-- contact us-->

<section id="contact" class="contact blue-darken-3  scrollspy">
  <div class="container">
	<div class="row">

  <?php
            include ("koneksi.php");
            $query="SELECT * FROM admin";
            $result=$mysqli->query($query);
            $row = mysqli_fetch_assoc($result);
            $id=$row['id'];
            $perusahaan=$row['perusahaan'];
            $tlp=$row['tlp'];
            $email=$row['email'];
            $alamat=$row['alamat'];
            $peta=$row['peta'];
            
        ?>

    <div class="col m5 s12">
    <div class="card-panel grey darken-3 center white-text">
		<h5> Contact </h5>
        <i class="material-icons">email</i> <br>
			<?= $email ?> <br>
        <i class="material-icons">phone</i><br>
        <?= $tlp ?>
    </div>
    <ul class="collection with-header">
		<li class="collection-header center"><h4>Our Office</h4></li>
		<li class="collection-item center">	<?= $perusahaan ?></li>
		<li class="collection-item center">	<?= $alamat ?></li>
		
    </ul>
    </div>
    <div class="col m7 s12">
		<form>
        <div class="card-panel">
         <h5> Please fill out this form </h5>
        <div class="input-field">
         <input type="text" name="name" id="name">
         <label for="name">Name</label>
        </div>
		
        <div class="input-field">
        <input type="email" name="email" id="email">
        <label for="email">Email</label>
        </div>
		
        <div class="input-field">
        <input type="text" name="phone" id="phone">
        <label for="phone">Phone Number</label>
        </div>
		
        <div class="input-field">
        <textarea name="message" id="message" class="
        materialize-textarea"></textarea>
        <label for="message">Message</label>
        </div>
		<button type="submit" class="btn grey darken-3">Send</button>
        </div>
        </form>
		</div>
      <div class="col m12 s12">
        <div class="card-panel grey darken-3 center white-text">
          <h5>MAPS</h5><br>
          <?= $peta ?>
        </div>
      </div>
    </div>
  </div>
</section>