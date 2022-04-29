<?php

namespace Database\Seeders;

use App\Models\Cast;       // Nama databasenya
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $casts = new Cast;
        // $casts -> nama = "Rezha";
        // $casts -> umur = "20";
        // $casts -> bio = "Ganteng (Default Seeding)";
        // $casts -> save();
        
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 5; $i++) { 
            \DB::table('casts')->insert([
                'nama'=>$faker->name,
                'umur'=>$faker->numberBetween($min = 10, $max = 50),
                'bio'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
