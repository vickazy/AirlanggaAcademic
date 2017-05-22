@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Rundown
@endsection

@section('contentheader_title')
Tambah Rundown
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<br>
			<form id="tambahRundown" method="post" action="{{url('pengelolaan-kegiatan/rincian-rundown/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				
				<div class="form-group">
					<label for="kegiatan_id" class="col-sm-2 control-label">Nomor Kegiatan</label>
					<div class="col-md-8">
						<select class="form-control select2" style="width: 100%;" name="kegiatan_id">
						@foreach($kegiatan as $pk)
						<option value="{{$pk->id_kegiatan}}">{{$pk->nama}}</option>
						@endforeach
						</select>
						
						<!-- <input type="text" class="form-control input-lg" id="kegiatan_id" name="kegiatan_id" placeholder="Masukkan Nomor Kegiatan" required> -->
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				
				<div class="form-group">
					<label for="kategori_rundown" class="col-sm-2 control-label">Kategori Kegiatan</label>
					<div class="col-md-8">		
						<input type="text" class="form-control input-lg" id="kategori_rundown" name="kategori_rundown" placeholder="Masukkan Kategori Kegiatan" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Kegiatan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama" name="nama" placeholder="Masukkan Nama Kegiatan" required>
					</div>
				</div>

				
				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="waktu" class="col-sm-2 control-label">Waktu Kegiatan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="waktu" placeholder="Masukkan Waktu Kegiatan" required>
					</div>
				</div>


				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd 12:00:00' }).val();

  } );
  </script>
@endsection
