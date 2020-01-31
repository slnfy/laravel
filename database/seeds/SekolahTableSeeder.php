<?php

use Illuminate\Database\Seeder;

class SekolahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sekolah = [
           ['nis'=>'131214','nama'=>'Seli nur','kelas'=>'XI RPL 2','alamat'=>'kampung cinta',
           'jenis_kelamin'=>'perempuan','tanggal_lahir'=>'2003-01-28','umur'=>'17'],
           ['nis'=>'44123','nama'=>'Fani','kelas'=>'X RPL 3','alamat'=>'Leuwi Panjang',
           'jenis_kelamin'=>'perempuan','tanggal_lahir'=>'2004-07-28','umur'=>'15'],
           ['nis'=>'65734','nama'=>'Ucuk','kelas'=>'XII RPL 2','alamat'=>'BMI',
           'jenis_kelamin'=>'Laki-laki','tanggal_lahir'=>'2000-12-14','umur'=>'20'],
        ];

           // masukkan data ke database
           DB::table('sekolahs')->insert($sekolah);
    }
}
