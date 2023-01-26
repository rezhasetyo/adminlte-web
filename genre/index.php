<?php
    include "./koneksi.php";
    $query = "SELECT * from genres ORDER BY id ASC";
    $ambil_data = mysqli_query($koneksi,$query);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Daftar Genre</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Genre</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="content">
<div class="card" style="width:60%">
    <div class="card-body">
        <table id="casttable" class="table table-bordered table-striped">
            <thead class="justify-content-center">
                <tr>
                    <th style="width:4%">#</th>
                    <th>Nama Genre</th>
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
                    <td>
                        <a href="#>">
                            <button class="btn btn-success btn-sm">Daftar Film</button> 
                        </a>
                    </td>
                </tr>
                <?php }     // Penutup Kurung?>
            </tbody>
        </table>
    </div>
</div>
</section>