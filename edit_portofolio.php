
    <?php
    include_once 'koneksi.php';
    include_once 'header.php';?>
    <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Edit Portofolio</h2>
       </div>
       </div>
    </div>
  </div>
</div>
    <?php $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM portofolio WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_portofolio.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group">
                    <label>Isi</label>   
                     <textarea class="ckeditor" name="profil" value="<?php echo $d['profil']; ?>"></textarea>
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