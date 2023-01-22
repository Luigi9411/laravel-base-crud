<?php

use App\Comic;
use Illuminate\Database\Seeder;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        require app_path('config/comics.php');
        $comics = config('comics');

        foreach ($comics as $comicbook) {
            $comic = new Comic;
            $comic->title = $comicbook['title'];
            $comic->description = $comicbook['description'];
            $comic->thumb = $comicbook['thumb'];
            $comic->price = $comicbook['price'];
            $comic->series = $comicbook['series'];
            $comic->sale_date = $comicbook['sale_date'];
            $comic->type = $comicbook['type'];

            $comic->save();

        }
    }
}
