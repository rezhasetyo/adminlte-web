<?php
  include "./koneksi.php";
  $id = isset($_GET['id'])   ?   $_GET['id'] : '';
  $query = "SELECT * from films WHERE id='$id' ";
  $ambil_data = mysqli_query($koneksi,$query);
  $getdata = mysqli_fetch_array($ambil_data);
    $judul      = $getdata['judul'] ?? '';
    $tahun      = $getdata['tahun'] ?? '';
    $ringkasan  = $getdata['ringkasan'] ?? '';
    // $poster     = $getdata['poster'] ?? '';
    $genre_id   = $getdata['genre_id'] ?? '';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Form Film</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Cast</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="container">
        <div class="col-8">
            <form action ="film/action.php" method="POST">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" 
                            value="<?php echo $judul?>" placeholder="Inputkan Judul">
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" id="tahun" class="form-control" name="tahun" 
                            value="<?php echo $tahun?>" placeholder="Inputkan Tahun">
                </div>

                <div class="form-group">
                    <label for="genre_id">Genre</label>
                    <input type="number" id="genre_id" class="form-control" name="genre_id" 
                            value="<?php echo $genre_id?>" placeholder="Pilih Genre">
                </div>

                <div class="form-group">
                    <label for="poster">Poster</label>
                    <input type="text" id="poster" class="form-control" name="poster" 
                        value="poster.jpg" disabled>
                </div>

                <div class="form-group">
                    <label for="ringkasan">Ringkasan</label>
                    <textarea class="form-control" id="ringkasan" name="ringkasan" rows="4" 
                            placeholder="Inputkan Ringkasan"><?php echo $ringkasan?></textarea>
                </div>

                <input type="hidden" name="id" value="<?php echo $id?>">

                <div class="form-group" style="float:right;">
                    <?php if (!empty($id)) { ?>
                        <button type="submit" class="btn btn-primary" name="simpan" value="update">Edit Film</button>
                    <?php } else {  ?>
                        <button type="submit" class="btn btn-primary" name="simpan" value="store">Tambahkan Film</button>
                    <?php } ?>
                    <a href="?cast=index"><button type="button" class="btn btn-danger">Batal</button></a>
                    
                </div>   
            </form>
        </div>  
    </div>
<br><br><br>
</section>