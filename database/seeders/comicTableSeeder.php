<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class comicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicList = config('comicData');

        foreach ($comicList as $comic) {
            $newRecord = new Comic();
            $newRecord->title = $comic['title'];
            $newRecord->description = $comic['description'];
            $newRecord->thumb = $comic['thumb'];
            $newRecord->price = $comic['price'];
            $newRecord->series = $comic['series'];
            $newRecord->sale_date = $comic['sale_date'];
            $newRecord->type = $comic['type'];
            $newRecord->save();
        }
    }
}
