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
            <form method="POST" action="#">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" 
                    placeholder="Input Nama Lengkap">
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" id="umur" class="form-control" name="umur" 
                    placeholder="Inputkan Usia">
                </div>

                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="2" 
                    placeholder="Inputkan Bio"></textarea>
                </div>

                <div class="form-group" style="float:right;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="?cast=index"><button type="button" class="btn btn-danger">Batal</button></a>
                </div>   
            </form>
        </div>  
    </div>
</section>