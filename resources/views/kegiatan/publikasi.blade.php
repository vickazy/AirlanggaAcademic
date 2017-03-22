@extends('adminlte::layouts.app')
<html>
@section('code-header')
@endsection

@section('htmlheader_title')
	<head>
	<title>Dokumentasi</title>

<style>
.kotak{
background:none;
border-width:5px;
border-style:solid;
border-color:black;
height:275px;
width: 690px;
}

.slideshow-containertwo {
  max-height: : 250px;
  margin-left: 5px;
  margin-top: 5px;
  position:relative;
  float:left;
}
.slideshow-container {
  background:none;
  border-style:none;
  border-color:none;
  height: 250px;
  width:400px;
  margin-right: 5px;
  margin-top: 5px;
  position:relative;
  float:right;
}

</style>

	</head>
@endsection

@section('contentheader_title')
PUBLIKASI KEGIATAN
@endsection


@section('main-content')
<body>
<table style="margin-bottom: 10px;">
<tr>
<td>Nama Kegiatan</td>
<td><input type="text" name="JudulK" value="Xplonation" readonly="readonly" /></td>
</tr>

<tr>
<td>Tempat Kegiatan</td>
<td><input type="text" name="TempatK" value="FST, Kampus C Unair" readonly="readonly" /></td>
</tr>

<tr>
<td>Tanggal Pelaksanaan</td>
<td><select><option>07</option></select>
<select><option>11</option></select>
<select><option>2017</option></select></td>
</tr>
</table>

<div class="kotak">
			<div class="slideshow-containertwo">
				<img src="{{asset('/img/mymage/Xplonation.png')}}" style="height:250px;">
			</div>
			<div class="slideshow-container">
			<div class="deskripsi" style="text-align: justify; color:black;">
			"XPLONATION" adalah sebuah acara dengan tema "KNOW your NATION, DO your MISSION" yang diadakan oleh Himpunan Mahasiswa Departemen Matematika (HIMATIKA) Universitas Airlangga sebagai media untuk memberi kesemparan generasi muda Surabaya dan sekitarnya, khususnya mahasiswa Universitas Airlangga dan mahasiswa Departemen Matematika, untuk mengembangkan kreativitas mereka agar menjadi penerus bangsa yang kreatif, inovatif, dan positif.
			
			</div>
			</div>
</div>
			</body>
@endsection

@section('code-footer')
@endsection
</html>