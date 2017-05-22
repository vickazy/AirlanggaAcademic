@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Penelitian Mahasiswa
@endsection

@section('contentheader_title')
Edit Penelitian Mahasiswa
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

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
			<form id="tambahBiodata" method="post" action="{{url('/mahasiswa/penelitian/'.$penelitian_mhs->kode_penelitian.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="judul" name="judul" placeholder="Masukkan Judul" value="{{$penelitian_mhs->judul}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="peneliti" class="col-sm-2 control-label">Nama</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="peneliti" name="peneliti" placeholder="Masukkan Nama" value="{{$penelitian_mhs->peneliti}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas" value="{{$penelitian_mhs->fakultas}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="tahun" class="col-sm-2 control-label">Tahun</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tahun" name="tahun" placeholder="Masukkan Tahun Penelitian" value="{{$penelitian_mhs->tahun}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="halaman_naskah" class="col-sm-2 control-label">Jumlah Halaman</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="halaman_naskah" name="halaman_naskah" placeholder="Masukkan Jumlah Halaman" value="{{$penelitian_mhs->halaman_naskah}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="sumber_dana" class="col-sm-2 control-label">Sumber Dana</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sumber_dana" name="sumber_dana" placeholder="Masukkan Sumber Dana" value="{{$penelitian_mhs->sumber_dana}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="besar_dana" class="col-sm-2 control-label">Besar Dana</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="besar_dana" name="besar_dana" placeholder="Masukkan Besar Dana" value="{{$penelitian_mhs->besar_dana}}" required>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="sk" class="col-sm-2 control-label">SK</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sk" name="sk" placeholder="Masukkan SK" value="{{$penelitian_mhs->sk}}" required>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="publikasi" class="col-sm-2 control-label">Publikasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="publikasi" name="publikasi" placeholder="Masukkan Publikasi" value="{{$penelitian_mhs->publikasi}}" required>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="kategori_penelitian" class="col-sm-2 control-label">Jenis Penelitian</label>
					<div class="col-md-8">
						<select name="kategori_penelitian" value="{{$penelitian_mhs->kategori_penelitian}}" required>
						    @if (($penelitian_mhs->kategori_penelitian)=='PKM')
							<option value="PKM" selected="selected">PKM</option>
							<option value="Penelitian Dosen">Penelitian Dosen</option>
							<option value="Karya Ilmiah">Karya Ilmiah</option>
							@elseif (($penelitian_mhs->kategori_penelitian)=='Penelitian Dosen')
							<option value="PKM">PKM</option>
							<option value="Penelitian Dosen" selected="selected">Penelitian Dosen</option>
							<option value="Karya Ilmiah">Karya Ilmiah</option>
							@elseif (($penelitian_mhs->kategori_penelitian)=='Karya Ilmiah')
							<option value="PKM">PKM</option>
							<option value="Penelitian Dosen">Penelitian Dosen</option>
							<option value="Karya Ilmiah" selected="selected">Karya Ilmiah</option>
							@endif
						</select>
					</div>
				</div>

				<div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Upload Scan PDF</label>
                  <div class="col-md-8">
                  <input type="file" id="file_pen" name="file_pen" placeholder="Pilih File" required>
                  
                  <p class="help-block">*File berformat .pdf</p>
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
  
@endsection
