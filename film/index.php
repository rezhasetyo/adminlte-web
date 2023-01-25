<?php
    include "./koneksi.php";
    $query = "SELECT * from films ORDER BY id ASC";
    $ambil_data = mysqli_query($koneksi,$query);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Daftar Film</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Film</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="row">
        
        <?php 
            $no = 1; 
            while($getdata = mysqli_fetch_assoc($ambil_data))  
                {       // Pembuka Kurung
        ?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="#" style="height:100px;">
                <div class="card-body">
                    <h3 style="line-height: 0.8em;"> <b> <?php echo $getdata['judul']  ?> </b> </h3>
                    <span class="badge badge-info mb-3">Genre : <?php echo $getdata['genre_id']  ?> </span>
                    <p>
                        <?php 
                            $ringkasan = $getdata['ringkasan'];
                            echo substr($ringkasan, 0, 50);  
                        ?>
                    </p>

                    <a href="index.php?film=form&id=<?php echo $getdata['id']?>">
                        <button class="btn btn-warning btn-sm">Edit</button> 
                    </a>
                    <a href="film/action.php?hapusFilm&id=<?php echo $getdata['id']?>"
                            onClick="return confirm('Apakah yakin akan menghapus?'); if (ok) return true; else return false">
                        <button class="btn btn-danger btn-sm">Hapus</button> 
                    </a>
                </form> 
                </div>
            </div>
        </div>
        <?php }  // Penutup Kurung?>

    </div>
</section>