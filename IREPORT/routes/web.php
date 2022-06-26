<?php
// use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('pp', function () {
    return view('user/profile_');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/our_team', 'OurteamController@OurteamUser');
// user
// Route::get('detail', function () {
//     return view('user/detail');
// });
// Route::get('edit', function () {
//     return view('user/edit');
// });
// Route::get('home', function () {
//     return view('user/home');
// });
// Route::get('input', function () {
//     return view('user/input');
// });

Auth::routes(); 

Route::get('/terminal', 'TerminalController@terminal');
Route::get('/laporan', 'LaporanController@index');
Route::get('/laporan/{id}', 'LaporanController@show');
Route::get('/laporan_/{provinsi}', 'LaporanController@showFilter');
Route::get('/laporan/create', 'ProvinsiController@provinsi');
Route::get('/berita_user', 'BeritaController@indexBeritaUser');
Route::get('/laporanupvote/{id}', 'LaporanController@upvote');
Route::get('/laporandownvote/{id}', 'LaporanController@downvote');
// admin

Route::middleware(['role:1'])->group(function () {
    // Route::get('main', function () {
    //     return view('admin/main');
    // });
    
    // Route::get('/beritaAdmin/inputPage', 'ProfileController@showAdmin');
    // Route::get('/beritaAdmin', 'ProfileController@showAdmin2');
    // Route::get('/laporanAdmin', 'ProfileController@showAdmin3');
    //berita
    Route::get('/beritaAdmin', 'BeritaController@indexBerita');
    Route::get('/beritaAdmin_', 'BeritaController@inputPage');
    // Route::get('/beritaAdmin/inputPage', 'ProfileController@showInCreateBerita');
    Route::post('/beritaAdmin', 'BeritaController@inputData');
    Route::get('/beritaAdmin/{id}/edit', 'BeritaController@editPage');
    Route::put('/beritaAdmin/{id}', 'BeritaController@editData');
    Route::delete('/beritaAdmin/{id}', 'BeritaController@delete');

    //laporan
    Route::get('/laporanAdmin', 'LaporanController@indexAdmin');

    //OurTeam
    Route::get('/ourteam', 'OurteamController@indexOurteam');
    Route::get('/ourteam_', 'OurteamController@inputPage');
    Route::post('/ourteam', 'OurteamController@inputData');
    Route::get('/ourteam/{id}/edit', 'OurteamController@editPage');
    Route::put('/ourteam/{id}', 'OurteamController@editData');
    Route::delete('/ourteam/{id}', 'OurteamController@delete');
});


Route::middleware(['role:2'])->group(function () {
    Route::get('/createLaporan', 'LaporanController@inputpage');
    Route::post('/laporan', 'LaporanController@inputData');
    Route::get('/laporan/{id}/edit', 'LaporanController@edit');
    Route::put('/laporan/{id}', 'LaporanController@update');
    Route::delete('/laporan/{id}', 'LaporanController@destroy');
    Route::get('/createLaporan', 'ProvinsiController@provinsi');
    Route::get('/myreport', 'LaporanController@indexmyreport');
});


    // Route::get('/laporan/{id}/edit', 'ProvinsiController@provinsiEdit');

    // profileroute
    // Route::get('/profile', 'ProfileController@index');
    // Route::get('/profile', 'ProfileController@show');
    // Route::get('/profile/{id}/edit', 'ProfileController@edit');
    Route::get('/profile', 'ProfileController@editpage');
    Route::get('/pengajuan', 'ProfileController@indexadmin');
    Route::put('/profile/{id}', 'ProfileController@update');
    Route::put('/pengajuan/{id}', 'ProfileController@pengajuan');
    Route::put('/jadiadmin/{user_id}', 'ProfileController@jadiadmin');
    Route::delete('/hapusakun/{user_id}', 'ProfileController@delete');


// berita
// Route::get('createBerita', function () {
//     return view('admin/berita/create');
// });
// Route::get('indexBerita', function () {
//     return view('admin/berita/index');
// });

// Route::get('showBerita', function () {
//     return view('admin/berita/show');
// });

// laporan
// Route::get('createLaporan', function () {
//     return view('admin/laporanUSer/create');
// });
// Route::get('indexLaporan', function () {
//     return view('admin/laporanUSer/index');
// });

// Route::get('showLaporan', function () {
//     return view('admin/laporanUSer/show');
// });

    // Route::group(['middleware' => ['auth']], function () {
    //     Route::get('/laporan/create', 'LaporanController@create');
    //     Route::post('/laporan', 'LaporanController@inputData');
    //     Route::get('/laporan/{id}/edit', 'LaporanController@edit');
    //     Route::put('/laporan/{id}', 'LaporanController@update');
    //     Route::delete('/laporan/{id}', 'LaporanController@destroy');
    //     Route::get('/laporan/create', 'ProvinsiController@provinsi');
    // });
