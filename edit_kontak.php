
    <?php
    include_once 'koneksi.php';
    include_once 'header.php';?>
    <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Edit kontak</h2>
       </div>
       </div>
    </div>
  </div>
</div>
    <?php $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM kontak WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_kontak.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Email</label>   
                     <input type="text" class="form-control" name="email" value="<?php echo $d['email']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Instagram</label>   
                     <input type="text" class="form-control" name="instagram" value="<?php echo $d['instagram']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Nomer Telfon</label>   
                     <input type="text" class="form-control" name="nomer" value="<?php echo $d['nomer']; ?>">
                 </div>
                 
                 
                    <input type="submit" class="btn btn-success">  
                    </div>  
        </form>
    </div>
    
        <?php 
    }
    ?>
 <?php
    include_once 'footer.php';?>
</body>
</html>