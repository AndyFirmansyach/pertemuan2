<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class Mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "1461900087";
        $mhs1->nama_mhs = "Andy Firmansyach";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "1461900118";
        $mhs2->nama_mhs = "Arianto Ferdy";
        $mhs2->save();
    }
}
