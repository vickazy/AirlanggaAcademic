@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Rundown
@endsection

@section('contentheader_title')
Edit Rundown
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
			<form id="tambahRundown" method="post" action="{{url('/pengelolaan-kegiatan/rundown/'.$rundown->kode_rundown.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="durasi_rundown" class="col-sm-2 control-label">Durasi Acara</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="durasi_rundown" placeholder="Masukkan Tanggal Acara" required>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="deskripsi_rundown" class="col-sm-2 control-label">Deskripsi</label>
					<div class="col-md-8">
						<textarea id="deskripsi_rundown" name="deskripsi_rundown" placeholder=" Masukkan Deskripsi" required cols="82" rows="5">{{$rundown->deskripsi_rundown}}
						</textarea>
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
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection


