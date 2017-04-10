@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Jadwal Permohonan
@endsection

@section('contentheader_title')
Jadwal Permohonan
@endsection

@section('main-content')
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/pla/jadwal-permohonan/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Jadwal Permohonan</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">ID Permohonan Ruang</th>      
      <th style="text-align:center">ID Ruang</th>
      <th style="text-align:center">ID Hari</th>
      <th style="text-align:center">ID Jam</th>
      <th style="text-align:center">ID Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($jadwalpermohonan as $i => $r) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$r->id_permohonan_ruang}}</td>
      <td width="20%" style="text-align:center">{{$r->id_ruang}}</td>
      <td width="20%" style="text-align:center">{{$r->id_hari}}</td>
      <td width="20%" style="text-align:center">{{$r->id_jam}}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus jadwal permohonan ini?');" href="{{url('/pla/jadwal-permohonan/'.$r->id.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/pla/jadwal-permohonan/'.$r->id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada jadwal permohonan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection