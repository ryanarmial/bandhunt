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

// Route::get('/', function () {
//   // return view('welcome');
//   return view('index', ['page' => 'home']);
// });
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/competition', function(){
  return view('competition', ['page' => 'competition']);
})->name('competition');

// Route::get('/submission', 'SubmissionController@index')->name('submission');
// Route::post('/submission', 'SubmissionController@saveband');
// Route::get('/submission', 'SubmitController@index')->name('submited');

Route::get('/submission', 'SubmitController@index')->name('submission');

Route::get('/', 'VoteController@index')->name('home');
Route::get('/vote/sort/{type}', 'VoteController@sort');
Route::post('/vote', 'VoteController@save');
Route::post('/share', 'VoteController@share');

Route::get('/vote/{name}', 'VoteController@detail');

Route::get('/dewanjuri/umi', 'JuriController@umi')->name('juriumi');
Route::get('/dewanjuri/maliq', 'JuriController@maliq')->name('jurimaliq');
Route::get('/dewanjuri/jan', 'JuriController@jan')->name('jurijan');
Route::get('/dewanjuri/ricky', 'JuriController@ricky')->name('juriricky');
Route::get('/dewanjuri', 'JuriController@index')->name('juri');

Route::get('/syaratketentuan', function(){
  return view('syarat', ['page' => 'syarat']);
})->name('syarat');

Route::get('/contract', function(){
  return view('contract', ['page' => 'contract']);
})->name('contract');

Route::get('/about',function(){
  return view('about', ['page' => 'about']);
})->name('about');

Route::get('/popup',function(){
  return view('popup', ['page' => 'competition']);
})->name('popup');

Route::get('/downloadpdf',function(){
  echo storage_path();
  return response()->download(public_path(). "/download/LevisBandHunt_FORMULIR_PENDAFTARAN.pdf");
})->name('downloadpdf');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@sendContact');


Route::get('/profil', 'ProfileController@index')->name('profil');

Route::get('/run', function () {

  $exitCode = Artisan::call('migrate', [
    '--force' => true,
  ]);
  // Artisan::call('backup:run');

  // ini_set("display_errors","On");
  // error_reporting(E_ALL) ;
  // $MysqlHost 		= env('DB_HOST', '<your host>');
  // $MysqlUser 		= env('DB_USERNAME', '<your username>');
  // $MysqlPassword 	= env('DB_PASSWORD', '<your password>');
  // $databasename  	= env('DB_DATABASE', '<your db name>');
  //
  // $backupDate 		= date("Y_m_d");
  // //Store inside Storage Directory
  // $backupPath 		= storage_path("daily_backup_db");
  // $filePath  		= storage_path("daily_backup_file");
  //
  // $backupName = $databasename."_".$backupDate.".sql.gz" ;
  // $fileBackupName = $databasename.'_'.$backupDate;
  //
  // // Take the mysql Dump
  // $dbBackup = "/usr/bin/mysqldump  --opt  -u$MysqlUser -h$MysqlHost --password=$MysqlPassword $databasename | gzip  > $backupName " ;
  // $dbOutput = shell_exec($dbBackup);
  //
  // // Take the code dump
  // $fileBackupPath = "{$backupPath}$fileBackupName.tar.gz";
  // $fileOutput = shell_exec("tar -cvzpf $fileBackupPath  $filePath");
  // $mysqlBackupPath = $backupName ;

});

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

// Route::get('/registersocial', 'SocialAuthController@registersocial')->name('registersocial');
// Route::post('/registersocial', 'SocialAuthController@saveregister');
Auth::routes();

Route::group(['middleware' => 'admin_guest'], function() {

  Route::get('/levis-tools/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/levis-tools/login', 'AdminAuth\LoginController@login');

  Route::get('/levis-tools/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/levis-tools/register', 'AdminAuth\RegisterController@register');

});

Route::group(['middleware' => 'admin_auth'], function(){

  Route::get('/levis-tools', 'Admin\AdminController@index')->name('homeadmin');
  Route::get('/levis-tools/users', 'Admin\UserController@index')->name('useradmin');
  Route::get('/levis-tools/bands', 'Admin\BandController@index')->name('bandadmin');
  Route::get('/levis-tools/bands/delete/{id}', 'Admin\BandController@delete');
  Route::get('/levis-tools/bands/{id}', 'Admin\BandController@detail');
  Route::get('/levis-tools/songs', 'Admin\SongController@index')->name('songadmin');
  Route::get('/levis-tools/songs/deletesong', 'Admin\SongController@deleteSong');
  Route::post('/levis-tools/logout', 'AdminAuth\LoginController@logout');

  Route::post('/levis-tools/song/score/{id}', 'Admin\SongController@updateScore');
  Route::post('/levis-tools/song/status/{id}', 'Admin\SongController@updateStatus');

  Route::get('/levis-tools/top32', 'Admin\TopController@index');
  Route::get('/levis-tools/top32/edit/{id}', 'Admin\TopController@edit')->name('edittop32');
  Route::post('/levis-tools/top32/edit/{id}', 'Admin\TopController@update');

  Route::get('/levis-tools/chart/{id?}', 'Admin\ChartController@index');
  Route::get('/levis-tools/share/{id?}', 'Admin\ShareController@index');
  Route::get('/levis-tools/daily/{id?}', 'Admin\DailyController@index');
  Route::get('/levis-tools/leaderboard/{date?}', 'Admin\LeaderboardController@index');
});



Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Contact Us From ');
		$message->from('no-reply@levisbandhunt.com', 'Website Name');
		$message->to('levisbandhunt@gmail.com');
	});
});
