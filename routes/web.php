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
Route::get('pesan/{a?}/{b?}' ,function($mkn=null,$mnm=null)
{
   if (isset($mkn)) {
       $mkn = "Anda memesan $mkn";
       echo $mkn;
   }
   if (!$mkn && !$mnm)
       return "Anda belum memesan sesuatu";



});
