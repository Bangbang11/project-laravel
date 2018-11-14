<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        	['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
        	['title'=>'Haruskah menunda Nikah?', 'content'=>'lorem ipsum'],
        	['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
        ];

        //masukan data ke database
        DB:table('posts')->insert($posts);
    }
}
