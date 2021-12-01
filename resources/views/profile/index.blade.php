@extends('layout/template')

@section('breadcrumb')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ORM Model</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="container">
            <div class="col-8">
                <form method="POST" action="{{ url('profile/' .$profile->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" id="umur" name="umur" class="form-control" 
                            placeholder="Inputkan Usia" value="{{$profile -> umur}}">
                            @error('umur')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bio">Biodata</label>
                            <textarea class="form-control" id="bio" name="bio" rows="2" 
                            placeholder="Inputkan Bio">{{$profile -> bio}}</textarea>
                            @error('bio')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="2" 
                            placeholder="Inputkan alamat">{{$profile -> alamat}}</textarea>           <!--  Jangan Pakai Spasi ! -->
                            @error('alamat')
                              <div style="color:red;">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>  
        </div>
@endsection