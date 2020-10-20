<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class CommentTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comment::factory(210)->create();
    }
}
