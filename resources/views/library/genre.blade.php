@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Library DOMPDF</h1>
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
<div class="card" style="width:50%">
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width:3%"> <b>ID</b> </th>
                    <th style="width:24%"> <b>Nama</b> </th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $key=>$value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            <a href="{{ URL::to('/pdf') }}" class="btn btn-danger float-right mt-4">Cetak PDF</a>
            <a href="#" class="btn btn-success float-right mt-4 mr-3">Cetak Excel</a>
        </div>

    </div>
</div>
@endsection