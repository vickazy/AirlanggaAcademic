@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Petugas TU
@endsection

@section('contentheader_title')
Petugas TU
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
  <a href="{{url('/pla/petugas_tu/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Petugas TU</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIP Petugas</th>      
      <th style="text-align:center">Nama Petugas</th>
      <th style="text-align:center">No Telp Petugas</th>
      <th style="text-align:center">Email Petugas</th>
      <th style="text-align:center">Password</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($petugas_tu as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$bio->nip_petugas}}</td>
      <td width="15%" style="text-align:center">{{$bio->nama_petugas}}</td>
      <td width="20%" style="text-align:center">{{$bio->no_telp_petugas}}</td>
      <td width="10%" style="text-align:center">{{$bio->email_petugas}}</td>
      <td width="10%" style="text-align:center">{{$bio->password}}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus petugas ini?');" href="{{url('/pla/petugas_tu/'.$bio->id_tu.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/pla/petugas_tu/'.$bio->id_tu.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="8"><center>Belum ada petugas tu</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection