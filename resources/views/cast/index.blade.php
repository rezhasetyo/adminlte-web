@extends('layout/template')

@section('breadcrumb')
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
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width:4%">#</th>
                    <th style="width:20%">Nama</th>
                    <th style="width:7%">Umur</th>
                    <th style="width:">Bio</th>
                    <th style="width:8%; text-align:center;" colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $key=>$value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->umur }}</td>
                    <td>{{ $value->bio }}</td>
                    <td align="center">
                        <a class="btn btn-success btn-sm" href="{{ url( 'cast/' .$value->id) }}">
                            Detail
                        </a>
                    </td>
                    <td align="center">
                        <a class="btn btn-info btn-sm" href="{{ url( 'cast/' .$value->id. '/edit' ) }}">
                            Edit
                        </a>
                    </td>
                    <td align=center">
                        <form action="{{ url('cast/'.$value->id) }}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="Delete">
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form> 
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            <a href="{{ url('cast/create') }}" class="btn btn-primary float-right mt-4">Tambah</a>
        </div>

    </div>
</div>


@endsection