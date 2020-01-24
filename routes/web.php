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

Route::get('/',function()
{
    return '<h1>Halo</h1>' .
    'Hallo Ini Aplikasi Laravel Pertama Saya'.
    'Laravel Is Magical Framwork';
});


Route::get('halo',function()
{
    return '<h1>Halo</h1>' .
    'Hallo Ini Aplikasi Laravel Pertama Saya'.
    'Laravel Is Magical Framwork';
});

Route::get('about',function()
{
    return '<h1>Halo</h1>' .
    'Hallo Ini Aplikasi Laravel Pertama Saya'.
    'Laravel Is Magical Framwork';
});


Route::get('seli',function()
{
    return
    'Hallo Nama saya seli<br>'.
    'Kelas XI RPL 1<br>'.
    'Umur 16 Tahun<br>'.
    'Alamat Babakan nugraha';
});


//Route parameter
Route::get('biodata/{nama}' ,function($a)
{
    return 'Halo Ini Biodata '.$a;
});


Route::get('datadiri/{nama}/{alamat}/{sekolah}/{umur}' ,function($a,$b,$c,$d)
{
    return 'Halo Nama saya '.$a .
           '<br>Alamat Saya '.$b .
           '<br>Sekolah Saya '.$c .
           '<br>Umur Saya '.$d
    ;
});

//Route optional parameter
Route::get('pesan/{a?}/{b?}/{c?}' ,function($mkn=null,$mnm=null,$harga=null)
{
   if (isset($mkn)) {
       $mkn = "Anda memesan $mkn";
       echo $mkn;
   }

   if (isset($mnm)) {
       $mnm = "& $mnm";
       echo "$mnm<br>";
       echo "->25000 Size Medium<br>";
       echo "->30000 Size Large<br>";
       echo "->25000 Small<br>";
   }


      if (isset($harga)) {
       $harga = "dengan harga<br> $harga";
       echo $harga;
   }


       if ($harga == 25000) {
           echo "Anda Memesan Kopi Berukuran Medium<br>";
       }

       if ($harga == 30000) {
           echo "Anda Memesan Kopi Berukuran Large<br>";
       }

       if ($harga < 25000) {
           echo "Anda Memesan Kopi Berukuran small<br>";
       }


   if (!$mkn && !$mnm)
       return "Anda belum memesan sesuatu";

});


Route::get('tni/{nama?}/{bb?}/{umur}' ,function($nm=null,$bb=null,$umur=null)
{
   if (isset($nm)) {
       $nm = "Nama Anda $nm";
       echo "$nm<br>";
   }

   if (isset($bb)) {
       $bb = "Berat Badan anda $bb";
       echo "$bb<br>";
   }
   if ($bb >= 76  && $bb <= 100 ) {
           echo "Anda Harus Turunkan Berat Badan<br>";
    }
    elseif ($bb >= 65 && $bb <= 75) {
          echo "Berat Badan Anda Ideal<br>";
    }
    elseif ($bb >= 50 && $bb <=64) {
          echo "Naikan Berat Badan Anda<br>";
    }
    elseif ($bb < 50) {
          echo "Anda Kekurangan Nutrisi<br>";
    }

    if (isset($umur)) {
       $umur = "Umur Anda anda $umur";
       echo "$umur<br>";

   }
   if ($umur >= 30 && $umur <= 40 ) {
           echo "Maaf Umur Anda Tidak Valid<br>";
    }
    elseif ($umur >=40 && $umur <= 50) {
          echo "Jabatan Kerja Anda Jendral<br>";
    }
    elseif ($umur >= 50 && $umur <= 60) {
          echo "Jabatan Kerja Anda Laksamana<br>";
    }
    elseif ($umur >= 40) {
          echo "Jabatan Kerja Anda Perwira<br>";
    }



   if (!$nm && !$bb && !$umur)
       return "Silahkan Isi Data Terlebih Dahulu";

});


//Mencari Semua Model post
Route::get('testmodel', function()
{
$query = App\post::all();
return $query;
});

//Mencari Model Berdasarkan Id post
Route::get('testmodel/2', function()
{
$query = App\post::find(1);
return $query;
});

//Mencari Model Berdasarkan title post
Route::get('testmodel/3', function()
{
$query = App\post::where('title','like','%Cepat Menikah%')->get();
return $query;
});

//Mengubah record, (hapus semua isi function)
Route::get('testmodel/4', function()
{
$post = App\post::find(1);
$post->title = "Ciri Keluarga Sakinah";
$post->save();
return $post;
});

//Menghapus record, (hapus semua isi function)
Route::get('testmodel/5', function()
{
$post = App\post::find(1);
$post->delete();
});


//Menambah record, (hapus semua isi function)
Route::get('testmodel/6', function()
{
$post = new App\post;
$post->title = "7 Amalan Pembuka Jodoh";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;
});


//akses model biodata
Route::get('modeltugas', function()
{
$query = App\Tugas::all()->take(3);
return $query;
});

//akses melihat 1 record 3 field
Route::get('modeltugas/2', function()
{
    $query = App/Tugas::select('nama_kayawan','no_ktp','jenis_kelamin',
    'alamat_karyawan','tanggal_lahir','agama','jabatan')->first();
});
