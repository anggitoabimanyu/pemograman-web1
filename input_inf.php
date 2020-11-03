<?php include "header.php"?>
<div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Tambah Informasi</h2>
       </div>
       </div>
    </div>
  </div>
</div>
<div class="container ">
<form method="post" action="konfirmasi_inf.php">
            <div class="form-group">
                <label>Judul Artikel</label>
                <input class="form-control" type="text" name="judul">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input class="form-control" type="text" name="autor">
            </div>
            <div class="form-group">
                <label>Tanggal Upload</label>
                <input class="form-control" type="date" name="tanggal">
            </div>
            <div class="form-group"> 
                    <label>Isi </label>   
                     <textarea class="ckeditor" name="isi" value="<?php echo $d['isi']; ?>"></textarea>
                 </div>
                <input class="btn btn-success" type="submit" name="tombolSubmit" value="Input">   
        </form>
        </div>

<?php include "footer.php"?>