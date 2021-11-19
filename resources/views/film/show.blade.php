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
              <li class="breadcrumb-item"><a href="/">Film (Upload Image)</a></li>
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

<a href="/film" class="btn btn-secondary">Kembali</a>
@endsection