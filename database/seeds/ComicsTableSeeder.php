<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');

        foreach($comics as $comic) {
            $newComic = new Comic();

            $slug = $comic["title"] . " " . $comic["type"];

            $newComic->title = $comic["title"];
            $newComic->slug = Str::slug($slug, '-');
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];

            $newComic->save();            
        }
    }
}
