<?php
use Illuminate\Database\Seeder;
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
        $data_comics = config("ComicsData");

        foreach($data_comics as $element){

            $newComic = new Comic();

            $newComic->title = $element['title'];
            $newComic->description = $element['description'];
            $newComic->thumb = $element['thumb'];
            $newComic->price = $element['price'];
            $newComic->series = $element['series'];
            $newComic->sale_date = $element['sale_date'];
            $newComic->type = $element['type'];

            $newComic->save();
        }
    }
}
