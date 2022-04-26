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
        $comics = config('comics');

        foreach ($comics as $el){

            $newEl = new Comic();

            $newEl -> title = $el['title'];
            $newEl -> description = '...';
            $newEl -> price = $el['price'];
            $newEl -> series = $el['series'];
            $newEl -> sale_date = $el['sale_date'];
            $newEl -> type = $el['type'];

            $newEl -> save();
        }
    }
}
