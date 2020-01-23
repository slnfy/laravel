<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $Siswa = [
           ['nama'=>'selinurfitriyani','nis'=>'12345','jenis_kelamin'=>'perempuan','alamat'=>'Babakan nugraha','tanggal_lahir'=>'2003-01-28','umur'=>'16'],
           ['nama'=>'Dhianaaulyaanzani','nis'=>'2345','jenis_kelamin'=>'perempuan','alamat'=>'Babakan nugraha','tanggal_lahir'=>'2011-11-11','umur'=>'19']

        ];

           // masukkan data ke database
           DB::table('siswa')->insert($Siswa);
    }
}
