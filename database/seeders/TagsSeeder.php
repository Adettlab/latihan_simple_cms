<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tags;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = new tags();
        $tag->id_berita = 1;
        $tag->slug = "arsenal_vs_chelsea";
        $tag->save();
    }
}
