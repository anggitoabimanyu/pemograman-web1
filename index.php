<?php include "header.php"?>
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/12.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Hello <br><strong class="cur">Selamat Datang</strong></h1>
                            <div class="button_section"> <a class="main_bt" href="contact.php">Contact us</a> <a class="main_bt" href="portofolio.php">Portofolio</a></div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

    </section>

    <!-- about -->
    <?php
    include "koneksi.php";
    $strSQL = "SELECT * FROM portofolio";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);


    ?>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2>Portofolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="aboutimg">
         <?php if ($jmlRowData <= 0) {
                    echo 'Tidak Ada Data Dalam Database';
                }
                else {
                    while($row = mysqli_fetch_assoc($runStrSQL)) {
                ?>
            <p><?php echo $row["profil"] ?></p>
            <?php }
                }
                ?>
                        <a href="portofolio.php">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- end about -->
    
    <!-- state abouts -->
    <?php
    include "koneksi.php";
    $strSQL = "SELECT * FROM kontak";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);


    ?>
    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage3">
                        <h2>Contact Us</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
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
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>

    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>