@extends('adamcahyonugroho.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adamcahyonugroho.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada yang Error :(<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('adamcahyonugroho.update',$adamcahyonugroho->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $adamcahyonugroho->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <select type="text" name="jk" value="{{ $adamcahyonugroho->jk }}" class="form-control" placeholder="Jenis Kelamin"><option>Laki-Laki</option><option>Perempuan</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea name="alamat" value="{{ $adamcahyonugroho->alamat }}" class="form-control" placeholder="Alamat"></textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama:</strong>
                    <select type="text" name="agama" value="{{ $adamcahyonugroho->agama }}" class="form-control" placeholder="Agama"><option>Islam</option><option>Kristen</option><option>Budha</option><option>Katolik</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah:</strong>
                    <input type="text" name="asal_sekolah" value="{{ $adamcahyonugroho->asal_sekolah }}" class="form-control" placeholder="Asal Sekolah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Minat Jurusan:</strong>
                    <select type="text" name="minat_jurusan" value="{{ $adamcahyonugroho->minat_jurusan }}" class="form-control" placeholder="Jenis Kelamin"><option>RPL</option><option>TKJ</option><option>TBG</option><option>MMD</option>
                </select>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            
        </div>
   
    </form>
@endsection