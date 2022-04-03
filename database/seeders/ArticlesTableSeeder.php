<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach(range(1,10) as $items){
            DB::table('articles')->insert([
                'title'=>"article $items",
                'slug' =>"article-$items",
                'body' =>"this is article $items",
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
