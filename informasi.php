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
<div class="container ">
<?php
    //buat sql
    include "koneksi.php";
    $strSQL = "SELECT * FROM blog";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);?>
    <?php if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <div class="flex-grow-1">
             <a href="mobil.php?id=<?php echo $row["id"]?>""><h3 class="mb-0"><?php echo $row["judul"] ?></h3></a>
              <div class="subheading mb-1">Posted By <?php echo $row["autor"] ?> on <?php echo $row["tanggal"] ?></div>
            </div>

    <?php 
      }
    }
    ?>
    </div>
<?php include "footer.php"?>