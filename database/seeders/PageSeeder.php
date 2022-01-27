<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageGallery;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{

    public function run()
    {
        Page::create(['title' => 'Hakkımızda', 'slug' => 'hakkimizda', 'category' => 1]);
        Page::create(['title' => 'Vizyonumuz', 'slug' => 'vizyonumuz', 'category' => 1]);
        Page::create(['title' => 'Misyonumuz', 'slug' => 'misyonumuz', 'category' => 1]);
        Page::create(['title' => 'Tarihçe', 'slug' => 'tarihce', 'category' => 1]);
    }
}
