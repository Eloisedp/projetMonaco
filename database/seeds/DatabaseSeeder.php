<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 3)->create()->each(function ($category) {
            $i = 3;
            while (--$i) {
                $category->articles()->save(factory(App\Article::class)->make());
            }
        });
    }
}
