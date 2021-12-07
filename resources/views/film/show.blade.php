@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Film</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Film</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')

<img src="{{ asset('poster/'. $model->poster)}}" style="width:400px; height:400px;" alt="">
<h1><b>{{ $model->judul }}</b></h1>
<p><b>{{ $model->tahun }}</b></p>
<p>{{ $model->ringkasan }}</p>

<h3 class="mt-3">KRITIK</h3>
  @foreach($model->kritik as $item)
    <div class="card">
      <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">{{ $item -> user -> name }}</h6>
        <p class="card-text">{{ $item->isi }}</p>
       
      </div>
    </div>
    
  @endforeach

<h3 class="mt-3">TULIS KRITIK</h3>
<form action="/kritik" method="POST">
  @csrf
  <div class="form-group mb-4">
    <label for="isi">Kritik</label>
    <input type="hidden" value="{{ $model->id }}" name="film_id">
    <textarea class="form-control" id="isi" name="isi" rows="4" 
        placeholder="Tuliskan Komentar"></textarea>           <!--  Jangan Pakai Spasi ! -->
      @error('ringkasan')
        <div style="color:red;"> {{ $message }} </div>
      @enderror

    <label for="tahun">Rating (1-100)</label>
    <input type="hidden" value="{{ $model->id }}" name="film_id">
    <input type="number" id="point" class="form-control" name="point" 
        placeholder="Inputkankan Rating">
      @error('point')
        <div style="color:red;">
          {{ $message }}
        </div>
      @enderror
      
      <button type="submit" class="btn btn-primary mt-3">Tambah Komentar</button>
  </div>
  
</form>


<a href="/film" class="btn btn-secondary mb-3">Kembali</a>
@endsection