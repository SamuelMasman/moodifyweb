<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => 'Peran Penting Keluarga bagi Kesehatan Mental',
            'content' => 'This is the content for sample article 1.',
            'image_url' => 'https://via.placeholder.com/150',
            'author' => 'Agus Nusantoro',
            'likes' => 15,
            'is_featured' => true,
        ]);

        Blog::create([
            'title' => 'Mental Kuat, Kinerja Hebat',
            'content' => 'This is the content for sample article 2.',
            'image_url' => 'https://via.placeholder.com/150',
            'author' => 'Radityo Perkasa',
            'likes' => 22,
            'is_featured' => false,
        ]);
    }
}