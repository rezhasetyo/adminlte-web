@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah (Film)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Film</a></li>
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
                <form method="POST" action="{{ url('film') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" id="judul" name="judul" class="form-control" 
                            placeholder="Inputkan Judul">
                            @error('judul')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" id="tahun" class="form-control" name="tahun" 
                            placeholder="Inputkankan Tahun">
                            @error('tahun')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="genre_id">Genre Id</label>
                            <select name="genre_id" class="form-control" id="">
                                <option value="">---Pilih Genre---</option>
                                @foreach ($genre as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>                            
                        </div>
                        @error('genre_id')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                        @enderror
                        
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <textarea class="form-control" id="ringkasan" name="ringkasan" rows="4" 
                            placeholder="Tuliskan Ringkasan"></textarea>           <!--  Jangan Pakai Spasi ! -->
                            @error('ringkasan')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="file" name="poster" class="form-control">
                        </div>
                        @error('poster')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                        @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <!-- <a href="/cast"><button type="button" class="btn btn-danger">Batal</button></a> -->
                </form>
            </div>  
        </div>
    <!-- </div> -->
<!-- </div> -->
@endsection