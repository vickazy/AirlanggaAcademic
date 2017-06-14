
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::group(['prefix' => 'dosen'], function() {
        /*
            Awal Routing Modul Kurikulum Buat Dosen
        */

        Route::group(['prefix' => 'kurikulum'], function() {
            //fitur capaian program (modul kurikulum)
            Route::group(['prefix' => 'cp_program'], function() {
                Route::get('/','Dosen\Kurikulum\CapaianProgramController@index');
                Route::get('create','Dosen\Kurikulum\CapaianProgramController@create');
                Route::post('create','Dosen\Kurikulum\CapaianProgramController@createAction');
                Route::get('{id}/edit','Dosen\Kurikulum\CapaianProgramController@edit');
                Route::get('{id}/delete','Dosen\Kurikulum\CapaianProgramController@delete');
                Route::post('{id}/edit','Dosen\Kurikulum\CapaianProgramController@editAction');
            });
            //fitur silabus (modul kurikulum)
            Route::group(['prefix' => 'silabus'], function(){
                Route::get('/','Dosen\Kurikulum\SilabusController@index');
                Route::get('create','Dosen\Kurikulum\SilabusController@create');            
                Route::post('create','Dosen\Kurikulum\SilabusController@createAction');
                Route::post('/autofill', 'Dosen\Kurikulum\SilabusController@autofill');
                Route::get('/delete/{id}','Dosen\Kurikulum\SilabusController@delete');
                Route::get('/edit/{id}','Dosen\Kurikulum\SilabusController@edit');
                Route::post('/edit/{id}','Dosen\Kurikulum\SilabusController@editAction');
                Route::get('pdf/{id}','Dosen\Kurikulum\SilabusController@pdf');                           
            });
            //fitr capaian pembelejaran (modul kurikulum)
            Route::group(['prefix' => 'cp_pembelajaran'], function() {
                Route::get('/','Dosen\Kurikulum\CapaianPembelajaranController@index');
                Route::get('create','dosen\Kurikulum\CapaianPembelajaranController@create');
                Route::post('create','Dosen\Kurikulum\CapaianPembelajaranController@createAction');
                Route::get('cp_pembelajaran/{id_cpem}/delete','dosen\Kurikulum\CapaianPembelajaranController@delete');
                Route::get('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@edit');
                Route::post('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@editAction');
            });
            //fitur rps (modul kurikulum)
            Route::group(['prefix' => 'rps'], function() 
            {
                Route::get('/','Dosen\Kurikulum\RPSController@index');
                Route::get('create','Dosen\Kurikulum\RPSController@create');
                Route::post('create','Dosen\Kurikulum\RPSController@createAction');
                Route::get('/delete/{id}','Dosen\Kurikulum\RPSController@delete');
                Route::get('/edit/{id}','Dosen\Kurikulum\RPSController@edit');
                Route::post('/edit/{id}','Dosen\Kurikulum\RPSController@editAction');
                Route::get('pdf/{id}','Dosen\Kurikulum\RPSController@pdf');           
                Route::get('cp-mk','Dosen\Kurikulum\RPSController@cp_mk');
                Route::post('cp-mk','Dosen\Kurikulum\RPSController@cpmkAction');
                Route::post('cp-mk-id', 'Dosen\Kurikulum\RPSController@cp_mkGetId');                
                Route::get('cpmk/{id}','Dosen\Kurikulum\RPSController@cpmk');
                Route::post('cpmk/{id}','Dosen\Kurikulum\RPSController@cpmkAction');
                Route::get('delete-cpmk/{id}','Dosen\Kurikulum\RPSController@cpmkDelete');             
            });
            //fitur e-learning (modul kurikulum)
            Route::group(['prefix' => 'elearning'], function() {
                Route::get('/','Dosen\Kurikulum\ElearningController@index');
                Route::get('create','Dosen\Kurikulum\ElearningController@create');
                Route::post('create','Dosen\Kurikulum\ElearningController@createAction');
            });         
            //fitur kode cp pembelajaran (modul kurikulum)
            Route::group(['prefix' => 'kodecppem'], function() {
                Route::get('/','Dosen\Kurikulum\KodeController@index');
                Route::post('create','Dosen\Kurikulum\KodeController@createAction');
                Route::get('/delete/{id}','Dosen\Kurikulum\KodeController@delete');
                Route::get('/edit/{id}','Dosen\Kurikulum\KodeController@edit');
                Route::post('/edit/{id}','Dosen\Kurikulum\KodeController@editAction');
            });
        });
    });

    Route::group(['prefix' => 'karyawan'], function() {
        /*
            Awal Routing Modul Kurikulum Buat Dosen
        */
        Route::group(['prefix' => 'kurikulum'], function() {
            //fitur mata kuliah (modul kurikulum)
            Route::group(['prefix' => 'mata-kuliah'], function() {
                Route::get('/','Karyawan\Kurikulum\MataKuliahController@index');
                Route::get('create','Karyawan\Kurikulum\MataKuliahController@create');
                Route::post('create','Karyawan\Kurikulum\MataKuliahController@createAction');
                Route::get('delete/{id}','Karyawan\Kurikulum\MataKuliahController@delete');
                Route::get('edit/{id}','Karyawan\Kurikulum\MataKuliahController@edit');
                Route::post('edit/{id}','Karyawan\Kurikulum\MataKuliahController@editAction');
                Route::get('print/{id}','Karyawan\Kurikulum\MataKuliahController@toPdf');           
            });
            //fitur silabus
            Route::group(['prefix' => 'silabus'], function() {
                Route::get('/','Karyawan\Kurikulum\SilabusController@index');
                Route::get('create','Karyawan\Kurikulum\SilabusController@create');            
                Route::post('create','Karyawan\Kurikulum\SilabusController@createAction');
                Route::get('edit/{id}','Karyawan\Kurikulum\SilabusController@edit');
                Route::post('edit/{id}','Karyawan\Kurikulum\SilabusController@editAction');
                Route::get('delete/{id}','Karyawan\Kurikulum\SilabusController@delete');
                Route::get('pdf/{id}','Karyawan\Kurikulum\SilabusController@pdf');                           
            });        
            //fitur rps (modul kurikulum)
            Route::group(['prefix' => 'rps'], function() {
                Route::get('/','Karyawan\Kurikulum\RPSController@index');
                Route::get('detail/{id}','Karyawan\Kurikulum\RPSController@detail');
                Route::get('pdf/{id}','Karyawan\Kurikulum\RPSController@pdf');                           
            });
        });
        /*
            Akhir Routing Moduk Kurikulum Buat Karyawan
        */
    });
    Route::group(['prefix' => 'mahasiswa'], function() {
        /*
            Awal Routing Modul Kurikulum Buat Mahasiswa
        */        
        Route::group(['prefix' => 'kurikulum'], function() {   
            //fitur silabus     
            Route::group(['prefix' => 'silabus'], function(){
                Route::get('/','Mahasiswa\Kurikulum\SilabusController@index');
                Route::get('create','Mahasiswa\Kurikulum\SilabusController@create');            
                Route::post('create','Mahasiswa\Kurikulum\SilabusController@createAction');
                Route::get('edit/{id}','Mahasiswa\Kurikulum\SilabusController@edit');
                Route::post('edit/{id}','Mahasiswa\Kurikulum\SilabusController@editAction');
                Route::get('delete/{id}','Mahasiswa\Kurikulum\SilabusController@delete');
            });
            //fitur rps
        });
        /*
            Akhir Routing Modul Kurikulum Buat Mahasiswa
        */                
    });     
});

