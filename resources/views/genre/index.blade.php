@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Genre</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Library Package</a></li>
              <li class="breadcrumb-item active">Tabel Genre</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="card" style="width:60%">
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width:3%"> <b>ID</b> </th>
                    <th style="width:20%"> <b>Nama</b> </th>
                    <th style="width:4%; text-align:center;"> <b>#</b> </th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $key=>$value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama }}</td>
                    <td style="text-align:center;">
                    <a class="btn btn-success btn-sm" href="{{ url( 'genre/' .$value->id) }}">Daftar Film</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection