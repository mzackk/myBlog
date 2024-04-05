<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories') -> insert([
            [
            'title' => 'HTML',
            'slug' => 'html',
            'description' => 'HTML stands for Hypertext Markup Language',
            'thumbnail' => 'noimage.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'parent_id' => null
            ],
            [
            'title' => 'HTML basic',
            'slug' => 'html-basic-1',
            'description' => 'Basic HTML',
            'thumbnail' => 'noimage.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'parent_id' => 1
            ],
            [
            'title' => 'HTML advanced',
            'slug' => 'html-advanced-1',
            'description' => 'Advanced HTML',
            'thumbnail' => 'noimage.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'parent_id' => 1
            ],
            [
            'title' => 'CSS',
            'slug' => 'css',
            'description' => 'CSS, or Cascading Style Sheets, is a fundamental topic in web development.',
            'thumbnail' => 'noimage.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'parent_id' => null
            ],
            [
            'title' => 'Javascript',
            'slug' => 'javascript',
            'description' => 'JavaScript is a programming language widely used by website programmers and developers.',
            'thumbnail' => 'noimage.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'parent_id' => null
            ],
            [
            'title' => 'PHP',
            'slug' => 'php',
            'description' => 'PHP, or Hypertext Preprocessor, is a scripting language that can be embedded within HTML. PHP is widely used for developing dynamic websites and building Content Management Systems (CMS).',
            'thumbnail' => 'noimage.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'parent_id' => null
            ],
            ]);
    }
}
