<style type="text/css">
table {
    border-collapse: collapse;
    text-align: justify;
}

table, th, td {
    border: 1px solid black;
    text-align: justify;
}
</style>

<div class="col-md-12" style="text-align: center;">
    <h3>Silabus Mata Kuliah {{$matkul_silabus->nama_matkul}}</h3>    
</div>
<br>
<table style="width:100%">
    <tr>
        <td style="width:4%">1 </td>
        <td style="width:30%;">Nama Mata Kuliah</td> 
        <td>{{$matkul_silabus->nama_matkul}}</td>
    </tr>
    <tr>
        <td>2 </td>
        <td>Kode Mata Kuliah</td> 
        <td>{{$matkul_silabus->kode_matkul}}</td>
    </tr>
    <tr>
        <td>3 </td>
        <td>Beban Studi</td> 
        <td>{{$matkul_silabus->sks}} SKS</td>
    </tr>    
    <tr>
        <td>4 </td>
        <td>Mata Kuliah Prasyarat</td> 
        <td>
        @forelse($matkul_prasyarat as $mk_p)
        {{$mk_p->matkul->nama_matkul}}
        @empty
        -
        @endforelse
        </td>
    </tr>        
    <tr>
        <td>5 </td>
        <td>Capaian Pembelajaran</td> 
        <td>{{$matkul_silabus->capaian_matkul}}</td>
    </tr>            
    <tr>
        <td>6 </td>
        <td>Deskripsi Mata Ajar</td> 
        <td>{{$matkul_silabus->deskripsi_matkul}}</td>
    </tr>                
    <tr>
        <td>7 </td>
        <td>Atribut Softskills</td>         
        <td>
            @foreach($atribut_softskill as $softskill)
                @foreach($mk_softskill as $mk_s)
                    @if($softskill->id_softskill == $mk_s->softskill_id)
                        - {{$softskill->softskill}}
                    @endif
                @endforeach
            @endforeach        
        </td>
    </tr>                    
    <tr>
        <td>8 </td>
        <td>Metode Pembelajaran</td> 
        <td>
            @forelse($mk_metode_pembelajaran as $mk_metode)
            - {{$mk_metode->sistem->sistem_pembelajaran}}
            <br> 
            @empty
            -
            @endforelse        
        </td>
    </tr>                        
    <tr>
        <td>9 </td>
        <td>Media Pembelajaran</td> 
        <td>
            @foreach($media_pembelajaran as $media)          
                @foreach($mk_media_pembelajaran as $mk_media)
                    @if($media->id == $mk_media->media_pembelajaran_id)
                        - {{$media->media_pembelajaran}}
                    @endif
                @endforeach
            @endforeach        
        </td>
    </tr>                                                           
    <tr>
        <td>10 </td>
        <td>Penilaian Hasil Belajar</td> 
        <td>{{$matkul_silabus->penilaian_matkul}}</td>
    </tr>        
    <tr>
        <td>11 </td>
        <td>Referensi Wajib</td> 
        <td>{{$matkul_silabus->pustaka_utama}}</td>
    </tr>                                                                   
</table>