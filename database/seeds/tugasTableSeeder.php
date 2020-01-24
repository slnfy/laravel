<?php

use Illuminate\Database\Seeder;

class tugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $Tugas = [

     ['nama_kayawan'=>'selinurfitriyani','no_ktp'=>'12345','jenis_kelamin'=>'perempuan','alamat_karyawan'=>'Babakan nugraha','tanggal_lahir'=>'2003-01-28','agama'=>'islam','jabatan'=>'marketing'],
     ['nama_kayawan'=>'Nandajulianugraha','no_ktp'=>'4456','jenis_kelamin'=>'perempuan','alamat_karyawan'=>'cibogo indah','tanggal_lahir'=>'2003-07-13','agama'=>'islam','jabatan'=>'sekertaris'],
     ['nama_kayawan'=>'santia','no_ktp'=>'2710','jenis_kelamin'=>'perempuan','alamat_karyawan'=>'cilisung','tanggal_lahir'=>'2003-01-28','agama'=>'islam','jabatan'=>'marketing']


      ];

      // masukkan data ke database
           DB::table('tugas')->insert($Tugas);

    }
}
