<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class matieres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([
          ['nom_matiere' => 'chimie'],
          ['niveau_matiere' => 'dut1-dst1'],
          ['filiere_id'] =>   
        ]);
    }
}
