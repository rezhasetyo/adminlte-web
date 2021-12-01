@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah (Cast)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cast</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<!-- <div class="card col-6"> -->
    <!-- <div class="card-body"> -->
        <div class="container">
            <div class="col-8">
                <form method="POST" action="{{ url('cast') }}">
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" 
                            placeholder="Input Nama Lengkap">
                            @error('nama')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" id="umur" class="form-control" name="umur" 
                            placeholder="Inputkan Usia">
                            @error('umur')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="2" 
                            placeholder="Inputkan Bio"></textarea>           <!--  Jangan Pakai Spasi ! -->
                            @error('bio')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <!-- <a href="/cast"><button type="button" class="btn btn-danger">Batal</button></a> -->
                </form>
            </div>  
        </div>
    <!-- </div> -->
<!-- </div> -->
@endsection