<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    private $perPage = 10;
    public function home()
    {
        return view('blog.home', [
            'posts' => Post::publish()->latest()->paginate($this->perPage)
        ]);
    }

    public function showCategories()
    {
        return view('blog.categories',[
            'categories' => Category::onlyParent()->paginate($this->perPage)
        ]);
    }
}
