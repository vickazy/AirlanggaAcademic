<!-- Contoh -->
<li
@if($page == 'asset')
{!! 'class="active"'!!}
@endif
>
<<<<<<< HEAD
<a href="{{ url('/inventaris/asset') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
<ul class="treeview-menu">

<li><a href="{{ url('/inventaris/asset') }}">all asset</a></li>


</ul>
</li>
=======

<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
<li
@if($page == 'verifikasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/verifikasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Verifikasi Mahasiswa</a>
</li>
			<li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('kalender') }}"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>
<li               
                @if($page == 'suratmasuk')
                {!! 'class="active"'!!}
                @endif
                >
            <!-- Href menuju ke url -->
                <a href="{{ url('surat-masuk') }}"><i class='fa fa-envelope'></i> <span> Surat Masuk</span></a>
                </li> 

<li class="treeview" id="scrollspy-components">
	<a href="#"><i class="fa fa-circle-o"></i> Kurikulum</a>
	<ul class="nav treeview-menu">
		<li
		@if($page == 'mata-kuliah')
		{!! 'class="active"'!!}
		@endif
		>
		<a href="{{ url('karyawan/kurikulum/mata-kuliah') }}"><i class="fa fa-circle-o" aria-hidden="true"></i>Mata Kuliah</a>
		</li>
	</ul>
</li>
<li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'status')
            {!! 'class="active"'!!}
            @endif>

            <a href="{{ url('/karyawan/monitoring-skripsi/status') }}"><i class='fa fa-book'></i><span>status</span></a>
            </li>
		<li
		@if($page == 'skripsi')
		{!! 'claass="active"'!!}
		@endif>

		<a href="{{url('karyawan/monitoring-skripsi/KBK')}}"><i class='fa fa-book'></i><span> KBK</span>
		</li>
		<li
		@if($page == 'skripsi')
		{!! 'class="active"'!!}
		@endif>

		<a href="{{ url('karyawan/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
		</li>
	</ul>
</li>

<li>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
<ul class="treeview-menu">
    <!-- Sidebarnya ditaruh dibawah sini -->
        <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
        <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
        <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
    </ul>
</li>

<li>
            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
            <li

    <!-- Modul PLA -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
            <li
    <li
                @if($page == 'petugas_tu')
                {!! 'class="active"'!!}
                @endif
                >
            <!-- Href menuju ke url krs-khs/ruang/view -->
                <a href="{{ url('karyawan/pla/petugas_tu') }}"><i class='fa fa-book'></i> <span> Petugas TU</span></a>
                </li>

            </ul>
            </li>

>>>>>>> 0d5b2f1938f264dfab9548ad3f560aa4ea9536cb
