<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function pertambahan($a = 0 , $b = 0)
    {
        $c = $a + $b ;
        return "$a + $b ".$c;

    }
    public function perkurangan($a = 0 , $b = 0)
    {
        $c = $a - $b ;
        return "$a - $b = ".$c;

    }
    public function pembagian($a = 0 , $b = 0)
    {
        $c = $a / $b ;
        return "$a / $b = ".$c;

    }
    public function perkalian($a = 0 , $b = 0)
    {
        $c = $a * $b ;
        return "$a * $b = ".$c;

    }


    public function tambah($a = 0 , $b = 0)
    {
        $nr = $a + $b;
        $fn = $a + $b;
        if (isset($a)) {
            $nr = $a.'+';
        }
        if (isset($b)) {
            $nr .= $b.'='.$fn;
        }
        return $nr;

    }

    public function loop()
    {
        $data =[
        ['Nama'=>'Rival','Kelas'=>'RPL 1','Uang_jajan'=>'50000'],
        ['Nama'=>'Jajang','Kelas'=>'RPL 2','Uang_jajan'=>'40000'],
        ['Nama'=>'Ato','Kelas'=>'RPL 1','Uang_jajan'=>'30000'],
        ['Nama'=>'Ade','Kelas'=>'RPL 3','Uang_jajan'=>'20000'],
        ['Nama'=>'Samsul','Kelas'=>'RPL 2','Uang_jajan'=>'10000']
        ];


        foreach ($data as $val => $key)
        {

        if ($key['Uang_jajan'] >= 50000) {
            $tabungan = $key['Uang_jajan'] *25 /100;
            $sisa = $key['Uang_jajan'] .$tabungan;
        } elseif ($key['Uang_jajan'] >= 25000) {
            $tabungan = $key['Uang_jajan'] *15 / 100;
            $sisa = $key['Uang_jajan'].$tabungan;
        } elseif ($key['Uang_jajan'] >= 10000) {
            $tabungan = $key['Uang_jajan'] *10 / 100;
            $sisa = $key['Uang_jajan'].$tabungan;
        }

            echo "<br>Nama :" .$key['Nama'].
                 "<br>Kelas :" .$key['Kelas'].
                 "<br>Uang jajan :" .$key['Uang_jajan'].
                 "<br>Uang Tabungan : ".$tabungan;
                 "<br>Uang Sisa : ".$sisa;
             echo "<br>";
        }
    }


    public function karyawan()
    {
        $data =[
        ['Nama'=>'Rival','Agama'=>'Islam','Alamat'=>'Rancamanyar','Jenis_kelamin'=>'Laki-laki','Jabatan'=>'manager','Jam_kerja'=>'250'],
        ['Nama'=>'Seli','Agama'=>'Islam','Alamat'=>'Raja Pancing','Jenis_kelamin'=>'Perempuan','Jabatan'=>'sekertaris','Jam_kerja'=>'200'],
        ['Nama'=>'Oci','Agama'=>'Islam','Alamat'=>'Babakan','Jenis_kelamin'=>'Perempuan','Jabatan'=>'staf','Jam_kerja'=>'100']
        ];


        foreach ($data as $val => $key)
        {

        if ($key['Uang_jajan'] >= 50000) {
            $tabungan = $key['Uang_jajan'] *25 /100;
            $sisa = $key['Uang_jajan'] .$tabungan;
        }
        elseif ($key['Uang_jajan'] >= 25000) {
            $tabungan = $key['Uang_jajan'] *15 / 100;
            $sisa = $key['Uang_jajan'].$tabungan;
        }
        elseif ($key['Uang_jajan'] >= 10000) {
            $tabungan = $key['Uang_jajan'] *10 / 100;
            $sisa = $key['Uang_jajan'].$tabungan;
        }

            echo "<br>Nama :" .$key['Nama'].
                 "<br>Agama :" .$key['Agama'].
                 "<br>Alamat :" .$key['Alamat'].
                 "<br>Jenis Kelamin :" .$key['Jenis_kelamin'].
                 "<br>Jabatan :" .$key['Jabatan'].
                 "<br>Jam Kerja :" .$key['Jam_kerja'].
                 "<br>Uang Tabungan : ".$tabungan;
                 "<br>Uang Sisa : ".$sisa;
             echo "<br>";
        }
    }

}















