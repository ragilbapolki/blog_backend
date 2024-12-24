<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data dummy ke tabel 'blogs'
        DB::table('blogs')->insert([
            [
                'title' => 'Dummy Blog Title 1',
                'content' => 'This is the content for the first dummy blog post.',
                'slug' => Str::slug('Dummy Blog Title 1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dummy Blog Title 2',
                'content' => 'This is the content for the second dummy blog post.',
                'slug' => Str::slug('Dummy Blog Title 2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dummy Blog Title 3',
                'content' => 'This is the content for the third dummy blog post.',
                'slug' => Str::slug('Dummy Blog Title 3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data dummy sesuai kebutuhan
        ]);
    }
}
