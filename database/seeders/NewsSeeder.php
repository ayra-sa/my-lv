<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::insert([
            [
                'title' => 'News Title 1',
                'description' => 'This is a brief description of news content 1.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 2',
                'description' => 'This is a brief description of news content 2.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 3',
                'description' => 'This is a brief description of news content 1.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 4',
                'description' => 'This is a brief description of news content 2.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 5',
                'description' => 'This is a brief description of news content 1.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 6',
                'description' => 'This is a brief description of news content 2.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 7',
                'description' => 'This is a brief description of news content 1.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 8',
                'description' => 'This is a brief description of news content 2.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
            [
                'title' => 'News Title 9',
                'description' => 'This is a brief description of news content 2.',
                'image_url' => 'https://via.placeholder.com/300x200',
            ],
        ]);
    }
}
