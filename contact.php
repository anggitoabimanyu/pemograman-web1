<?php include "header.php"?>
<div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Contact Us</h2>
       </div>
       </div>
    </div>
  </div>
</div>
<?php
    include "koneksi.php";
    $strSQL = "SELECT * FROM kontak";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);


    ?>
<div class="Contact ">
  <div class="container ">
  <?php if ($jmlRowData <= 0) {
                    echo 'Tidak Ada Data Dalam Database';
                }
                else {
                    while($row = mysqli_fetch_assoc($runStrSQL)) {
                ?>
           
            
           <img src="images/email1.png" alt="#"><?php echo $row["email"]?>
<br><br>
<a href="https://www.instagram.com/anggito666/"><img src="images/ig.png" alt="#"><?php echo $row["instagram"]?></a>
<br><br>
<img src="images/tlp1.png" alt="#"><?php echo $row["nomer"]?>
<?php }
                }
                ?>
  </div>
</div>

 <!-- footer -->
 <footer>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2020 All Right Reserved By </p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
<!-- Javascript files--> 
<script src="js/jquery.min.js "></script> 
<script src="js/popper.min.js "></script> 
<script src="js/bootstrap.bundle.min.js "></script> 
<script src="js/jquery-3.0.0.min.js "></script> 
<script src="js/plugin.js "></script> 

<!-- sidebar --> 
<script src="js/jquery.mCustomScrollbar.concat.min.js "></script> 
<script src="js/custom.js "></script>
</body>
</html>