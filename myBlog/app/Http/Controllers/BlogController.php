<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

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

    public function showTags()
    {
        return view('blog.tags',[
            'tags' => Tag::paginate($this->perPage)
        ]);
    }

    public function searchPosts(Request $request)
    {
        if (!$request->get('keyword')){
            return redirect()->route('blog.home');
        }

        return view('blog.search_post',[
            'posts' => Post::publish()->search($request->keyword)->paginate($this->perPage)->appends(['keyword' => $request->keyword])
        ]);
    }

    public function showPostsByCategory($slug)
    {
        $posts = Post::publish()->whereHas('categories', function($query) use($slug){
            return $query->where('slug', $slug);
        })->paginate($this->perPage);

        $category = Category::where('slug', $slug)->first();

        return view('blog.posts-category',[
            'posts' => $posts,
            'category' => $category
        ]);
    }
}
