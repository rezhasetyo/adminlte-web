@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit (Cast)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cast</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
                <form method="POST" action="{{ url('cast/' .$model->id) }}">
                    @csrf
                    <!-- @method('PATCH') -->
                    <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" 
                            value="{{ $model->nama }}">
                              @error('nama')
                                <div class="alert alert-danger">
                                  {{ $message }}
                                </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" id="umur" class="form-control" name="umur" 
                            value="{{ $model->umur }}" >
                              @error('umur')
                                <div class="alert alert-danger">
                                  {{ $message }}
                                </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="2" placeholder="Inputkan Bio">{{ $model->bio }}</textarea>
                              <!-- <textarea></textarea> Jangan Pakai Spasi ! -->
                            @error('bio')
                              <div class="alert alert-danger">
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