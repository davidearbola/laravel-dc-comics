<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class comicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newRecord = new Comic();
            $newRecord->title = $faker->word();
            $newRecord->description = $faker->paragraph();
            $newRecord->thumb = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/1920/1080";
            $newRecord->price = $faker->word();
            $newRecord->series = $faker->word();
            $newRecord->sale_date = $faker->date($format = 'Y-m-d');
            $newRecord->type = $faker->word();
            $newRecord->save();
        }
    }
}
