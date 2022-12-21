<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config('comics');

        foreach ($comicsArray as $comics) {
            $newComic = new Comic();
            $newComic->title = $comics['title'];
            $newComic->description = $comics['description'];
            $newComic->thumb = $comics['thumb'];
            $newComic->price = $comics['price'];
            $newComic->series = $comics['series'];
            $newComic->sale_date = $comics['sale_date'];
            $newComic->type = $comics['type'];
            $newComic->save();
        }
    }
}
