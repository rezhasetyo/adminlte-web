<?php
  include "./koneksi.php";
  $id = isset($_GET['id'])   ?   $_GET['id'] : '';
  $query = "SELECT * from casts WHERE id='$id' ";
  $ambil_data = mysqli_query($koneksi,$query);
  $getdata = mysqli_fetch_array($ambil_data);
    $nama = $getdata['nama'] ?? '';
    $umur = $getdata['umur'] ?? '';
    $bio = $getdata['bio'] ?? '';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Daftar Cast</h1>
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
            <form action ="cast/action.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" 
                    value="<?php echo $nama?>" placeholder="Inputkan Nama Lengkap">
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" id="umur" class="form-control" name="umur" 
                    value="<?php echo $umur?>" placeholder="Inputkan Umur">
                </div>

                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="2" 
                    placeholder="Inputkan Bio"><?php echo $bio?></textarea>
                </div>

                <input type="hidden" name="id" value="<?php echo $id?>">

                <div class="form-group" style="float:right;">
                    <?php if (!empty($id)) { ?>
                        <button type="submit" class="btn btn-primary" name="simpan" value="update">Edit Data</button>
                    <?php } else {  ?>
                        <button type="submit" class="btn btn-primary" name="simpan" value="store">Tambahkan Data</button>
                    <?php } ?>
                    <a href="?cast=index"><button type="button" class="btn btn-danger">Batal</button></a>
                    
                </div>   
            </form>
        </div>  
    </div>
</section>