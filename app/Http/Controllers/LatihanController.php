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
        $data =
           [
            ['nama'=>'Risma','agama'=>'Islam','alamat'=>'Bandung','jenkel'=>'Laki-laki','jabatan'=>'Manager','jamker'=>350],
            ['nama'=>'Rizky','agama'=>'Islam','alamat'=>'Bandung','jenkel'=>'Perempuan','jabatan'=>'Sekretaris','jamker'=>250],
            ['nama'=>'Irma','agama'=>'Islam','alamat'=>'Bandung','jenkel'=>'Perempuan','jabatan'=>'Staff','jamker'=>200],
        ];
        foreach ($data as $val => $key) {
            echo 'Nama : '.$key['nama'].'<br>'.
                'Agama : '.$key['agama'].'<br>'.
                'Alamat : '.$key['alamat'].'<br>'.
                'Jenis Kelamin : '.$key['jenkel'].'<br>'.
                'Jabatan : '.$key['jabatan'].'<br>'.
                'Jam Kerja : '.$key['jamker'].'<br>';

            if ($key['jabatan'] == "Manager") {
                $gaji = 5000000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['jabatan'] == "Sekretaris") {
                $gaji = 3500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['jabatan'] == "Staff") {
                $gaji = 2500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            //Jam kerja
            if ($key['jamker'] >= 250) {
                $bonus = $gaji*10/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            elseif ($key['jamker'] >= 200) {
                $bonus = $gaji*5/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            $gaber = $gaji+$bonus;
            $ppn = $gaber*2.5/100;
            echo 'PPN : Rp. '.$ppn.'<br>';
            $gatot = $gaber - $ppn;
            echo 'Total Gaji : Rp. '.$gatot.'<hr>';
        }

    }

}















