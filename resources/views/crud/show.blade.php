@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cast Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cast (Factory/Faker)</a></li>
              <li class="breadcrumb-item active">Detail</li>
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
                <table id="example1" class="table table-borderless">
                <tr>
                    <th width="200px">Nama</th>
                    <th width="30px">:</th>
                    <th>{{ $model -> nama }}</th>
                </tr>
                <tr>
                    <th width="200px">Umur</th>
                    <th width="30px">:</th>
                    <th>{{ $model -> umur }}</th>
                </tr>
                <tr>
                    <th width="200px">Biografi</th>
                    <th width="30px">:</th>
                    <th>{{ $model -> bio }}</th>
                </tr>
            </table>
            </div>  
        </div>
    <!-- </div> -->
<!-- </div> -->
@endsection