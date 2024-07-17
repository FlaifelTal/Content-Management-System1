<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;
use File;
class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::all();
        // dd($posts); //works
        return view('services', compact('posts'));
        // $post=post::all();
        // dd($post);
        // return view('services',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max: 255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);
        //upload data to the database 
        $fileName = time() . '_' . $request->image->getClientOriginalName(); //change the file name with a unique one 
        // ///////////////////////////////////////////////////
        $filePath = $request->image->storeAs('uploads', $fileName, 'public'); // added public to visibility public 

        $post = new post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        // $post->image = $filePath;
        $post->image = 'storage/' . $filePath;
        // $post->move('uploads');
        $post->save();

        return redirect()->route('post.index'); //redirect to the index route 

        // dd('Success');
        // return $filePath;

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $post = post::findOrFail($id);
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categories = category::all();
        $post = post::findOrFail($id);
        return view('edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,  $id)
    {
        //handle form data
        $request->validate([

            // 'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max: 255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);
        $post = post::findOrFail($id);

        //check if img only if one got selected 
        if ($request->hasFile('image')) {
            $request->validate([

                'image' => ['required', 'max:2028', 'image']

            ]);

            $fileName = time() . '_' . $request->image->getClientOriginalName(); //change the file name with a unique one 
            $filePath = $request->image->storeAs('uploads', $fileName, 'public');// its supposed to be only uploads 
            // File::delete(public_path($post->image));
            $post->image = 'storage/' . $filePath;
        }
        //  elseif (!$post->image) {
        //     // If no image is uploaded and no image exists for the post, set a default image
        //     $post->image = 'assets\img\pic12.jpg';
        // }
        //upload data to the database 
        // $post = new post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        // $post->image = $filePath;
        $post->save();

        return redirect()->route('post.index'); //redirect to the index route 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $post = post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }

    public function trashed()  {
        $posts = post::onlyTrashed()->get();
        return view('trashed',compact('posts'));
    }
    public function restore($id)  {
        $post = post::onlyTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->back();
    }
    public function forceDelete($id)  {
        $post = post::onlyTrashed()->findOrFail($id);
        // File::delete(public_path($post->image));
        $post->forceDelete();
        return redirect()->back();
    
    }
}
