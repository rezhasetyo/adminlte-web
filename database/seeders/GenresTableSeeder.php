<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    $genres1 = new Genre;
    $genres1 -> nama = "Action";
    $genres1 -> save();
    
    $genres2 = new Genre;
    $genres2 -> nama = "Adventure";
    $genres2 -> save();

    $genres3 = new Genre;
    $genres3 -> nama = "RPG";
    $genres3 -> save();

    $genres4 = new Genre;
    $genres4 -> nama = "Simulation";
    $genres4 -> save();
    
    $genres5 = new Genre;
    $genres5 -> nama = "Strategy";
    $genres5 -> save();

    $genres6 = new Genre;
    $genres6 -> nama = "Sport";
    $genres6 -> save();
    }
}
