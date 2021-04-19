@extends('adamcahyonugroho.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SMK MERDEKA BELAJAR</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('adamcahyonugroho.create') }}"> Tambah Data</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>NoReg</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Minat Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($adamcahyonugroho as $adamcahyo)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $adamcahyo->nama }}</td>
            <td>{{ $adamcahyo->jk }}</td>
            <td>{{ $adamcahyo->alamat }}</td>
            <td>{{ $adamcahyo->agama }}</td>
            <td>{{ $adamcahyo->asal_sekolah }}</td>
            <td>{{ $adamcahyo->minat_jurusan }}</td>
            <td>
                <form action="{{ route('adamcahyonugroho.destroy',$adamcahyo->id) }}" method="POST"onsubmit="return confirm('Apakah yakin data akan dihapus?')">
   
                    <a class="btn btn-info" href="{{ route('adamcahyonugroho.show',$adamcahyo->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('adamcahyonugroho.edit',$adamcahyo->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $adamcahyonugroho->links() !!}
      
@endsection