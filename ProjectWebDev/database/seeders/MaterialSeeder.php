<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::enableForeignKeyConstraints();
        Material::truncate();
        Schema::disableForeignKeyConstraints(); 
        //gunanya kode ini agar data trsbut dimulai dri id 1


        Material::factory(10)->create();
    }
}