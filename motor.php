<?php include "header.php"?>
<div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Informasi</h2>
       </div>
       </div>
    </div>
  </div>
</div>
<?php

include "koneksi.php";
$id= $_GET['id'];
$query="SELECT * FROM blog WHERE id='$id' ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) < 0) {
  echo "<tr><td colspan='4'>Data profil tidak terdapat pada database</td></tr>";
}
else {
 while($row =mysqli_fetch_assoc($result)){

?>
   
            <!-- Page Content-->
        <div class="container-fluid">
            <!-- About-->
            <section class="resume-section" id="blog">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                       <?php echo $row["judul"]?></h1>
                    <p class="lead mb-0"><?php echo $row["isi"]?></p>
                </div>
            </section>
         <?php
        }
        }
        ?>
<?php include "footer.php"?>