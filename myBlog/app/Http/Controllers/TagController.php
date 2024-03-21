<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    private $perPage = 10;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tags = $request->get('keyword') 
            ? Tag::search($request->keyword)->paginate($this->perPage)
            : Tag::paginate($this->perPage);
        return view('tags.index', [
            'tags' => $tags ->appends(['keyword' => $request -> keyword])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'title' => 'required|string|max:25',
            'slug' => 'required|string|unique:tags,slug'
        ],
        [],
        $this->getAttributes()

        )->validate();

        try {
            Tag::create([
                'title' => $request->title,
                'slug' => $request->slug
            ]);
            Alert::success(
                trans('tags.alert.create.title'),
                trans('tags.alert.create.message.success'),
            );

            return redirect()->route('tags.index');
        } catch (\Throwable $th) {
            Alert::error(
                trans('tags.alert.create.title'),
                trans('tags.alert.create.message.error', ['error' => $th->getMessage()])
            );
            return redirect()->back()->withInput($request->all());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        Validator::make($request->all(),[
            'title' => 'required|string|max:25',
            'slug' => 'required|string|unique:tags,slug,' . $tag->id 
        ],
        [],
        $this->getAttributes()

        )->validate();

        try {
            $tag->update([
                'title' => $request->title,
                'slug' => $request->slug
            ]);

            Alert::success(
                trans('tags.alert.update.title'),
                trans('tags.alert.update.message.success'),
            );

            return redirect()->route('tags.index');
        } catch (\Throwable $th) {
            Alert::error(
                trans('tags.alert.update.title'),
                trans('tags.alert.update.message.error', ['error' => $th->getMessage()])
            );
            return redirect()->back()->withInput($request->all());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        try {
            $tag->delete();

            Alert::success(
                trans('tags.alert.delete.title'),
                trans('tags.alert.delete.message.success'),
            );

            return redirect()->route('tags.index');
        } catch (\Throwable $th) {
            Alert::error(
                trans('tags.alert.delete.title'),
                trans('tags.alert.delete.message.error', ['error' => $th->getMessage()])
            );
            
    }
    return redirect()->back();
}

    public function getAttributes()
    {
        return[
            'title' => trans('tags.form_control.input.title.attribute'),
            'slug' => trans('tags.form_control.input.slug.attribute'),

        ];
    }
}
