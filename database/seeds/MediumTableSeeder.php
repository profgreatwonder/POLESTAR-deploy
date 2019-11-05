<?php

use App\Medium;

use Illuminate\Database\Seeder;

class MediumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medium1 = ['title' => 'Faith'];

        $medium2 = ['title' => 'Lifestyle'];

        $medium3 = ['title' => 'Travels and Tour'];

        $medium4 = ['title' => 'Sports'];

        $medium5 = ['title' => 'Programming Languages'];

        $medium6 = ['title' => 'Life Issues'];

        $medium7 = ['title' => 'Trending'];


        Medium::create($medium1);

        Medium::create($medium2);

        Medium::create($medium3);

        Medium::create($medium4);

        Medium::create($medium5);

        Medium::create($medium6);

        Medium::create($medium7);
    }
}
