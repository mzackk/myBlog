<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create', [
            'categories' => Category::with('descendants')->onlyParent()->get(),
            'statuses' => $this->statuses()
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:60',
                'slug' => 'required|string|unique:posts,slug',
                'thumbnail' => 'required',
                'description' => 'required|string|max:240',
                'content' => 'required',
                'category' => 'required',
                'tag' => 'required',
                'status' => 'required'
            ],
            [],
            $this->attributes()
        );

        if($validator->fails()){
            if($request['tag']){
                $request['tag'] = Tag::select('id','title')->whereIn('id', $request->tag)->get();
            }
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $post = Post::create([
                "title" => $request->title,
                "slug" => $request->slug,
                "thumbnail" => parse_url($request->thumbnail)['path'],
                "description" => $request->description,
                "content" => $request->content,
                "status" => $request->status,
                "user_id" => Auth::user()->id,
            ]);
            $post->tags()->attach($request->tag);
            $post->categories()->attach($request->category);

            Alert::success(
                trans('posts.alert.create.title'),
                trans('posts.alert.create.message.success')
            );
            return redirect()->route('posts.index');

        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                trans('posts.alert.create.title'),
                trans('posts.alert.create.message.error', ['error' => $th->getMessage()]),
            );
            if($request['tag']){
                $request['tag'] = Tag::select('id','title')->whereIn('id', $request->tag)->get();
            }
            return redirect()->back()->withInput($request->all());
        }finally{
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $categories = $post->categories;
        $tags =$post->tags;
        return view('posts.detail', compact('post','categories', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    private function statuses()
    {
        return ([
            'draft' => trans('posts.form_control.select.status.option.draft'),
            'publish' => trans('posts.form_control.select.status.option.publish'),
        ]);
    }

    private function attributes()
    {
        return [
                'title' => trans('posts.form_control.input.title.attribute'),
                'slug' => trans('posts.form_control.input.slug.attribute'),
                'thumbnail' => trans('posts.form_control.input.thumbnail.attribute'),
                'description' => trans('posts.form_control.textarea.description.attribute'),
                'content' => trans('posts.form_control.textarea.content.attribute'),
                'category' => trans('posts.form_control.input.category.attribute'),
                'tag' => trans('posts.form_control.select.tag.attribute'),
                'status' => trans('posts.form_control.select.status.attribute')
        ];
    }
}
