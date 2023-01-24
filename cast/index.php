<?php
    include "./koneksi.php";
    $query = "SELECT * from casts ORDER BY id ASC";
    $ambil_data = mysqli_query($koneksi,$query);
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
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="content">
<div class="card">
    <div class="card-body">
        <table id="casttable" class="table table-bordered table-striped">
            <thead class="justify-content-center">
                <tr>
                    <th style="width:4%">#</th>
                    <th >Nama</th>
                    <th >Umur</th>
                    <th >Bio</th>
                    <th style="width:20%">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $no = 1; 
                    while($getdata = mysqli_fetch_assoc($ambil_data))  
                        {       // Pembuka Kurung
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $getdata['nama']  ?></td>
                    <td><?php echo $getdata['umur']  ?></td>
                    <td><?php echo $getdata['bio']  ?></td>
                    <td>
                        <a href="index.php?cast=form&id=<?php echo $getdata['id']?>">
                            <button class="btn btn-info btn-sm">Edit</button> 
                        </a>
                        <a href="cast/action.php?hapusCast&id=<?php echo $getdata['id']?>"
                                onClick="return confirm('Apakah yakin akan menghapus?'); if (ok) return true; else return false">
                            <button class="btn btn-danger btn-sm">Hapus</button> 
                        </a>
                    </td>
                </tr>
                <?php }     // Penutup Kurung?>
            </tbody>
        </table>
        <div>
            <a href="?cast=form" class="btn btn-primary float-right mt-4">Tambah</a>
        </div>
    </div>
</div>
</section>