<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$now = new Carbon();
        dd($now); */

        $posts = Post::orderBy('updated_at','DESC')->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $post = new Post();
        return view('admin.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5',
            'image' => 'required|image',
        ], [
            'title.min' => 'il titolo deve avere almeno 5 caratteri',
            'description.min' => 'la descrizione deve avere almeno 5 caratteri',
        ]);


        $data = $request->all();

        if (array_key_exists('image', $data)) {
            $img_url = Storage::put('post_image', $data['image']);
            $data['image'] = $img_url;
        }

        $new_post = Post::create($data);



        return redirect()->route('admin.posts.index')->with('message', "Post creato con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5',
            'image' => 'required|image',
        ], [
            'required' => 'il campo è obbligatorio',
            'title' => 'il titolo deve avere almeno 5 caratteri',
            'description' => 'la descrizione deve avere almeno 5 caratteri',
            'image' => 'l\'immagine deve essere valida',
        ]);

        $data = $request->all();

        if (array_key_exists('image', $data)) {
            if ($post->image) Storage::delete($post->image);

            $img_url = Storage::put('post_image', $data['image']);
            $data['image'] = $img_url;
        }

        $post->update($data);

        return redirect()->route('admin.posts.show', $post)->with('message', "Post aggiornato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        if ($post->image) Storage::delete($post->image);
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
