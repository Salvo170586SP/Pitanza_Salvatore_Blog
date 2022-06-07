<?php

namespace App\Http\Controllers\Admin;

use App\Models\Picture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pictures = Picture::all();

        $picture = new Picture();
        return view('admin.pictures.create', compact('picture', 'pictures'));
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
            'image' => 'nullable|image',
        ], [
            'image' => 'l\'immagine deve essere corretta',
        ]);


        $data = $request->all();


     /*    $new_picture = Picture::create($data); 

        if (array_key_exists('images[]', $data)) {
            foreach ($request->file('images[]') as $image) {

                 $image->move(public_path('gallery_image'), $image);
                Storage::put('gallery_image', $data['images[]']);
                $img = Picture::create([
                    'image' => $image,
                ]);
            }
        }
 */


        $data = $request->all();

         if (array_key_exists('image', $data)) {
            $img_url = Storage::put('gallery_image', $data['image']);
            $data['image'] = $img_url;
        }
        
        $new_picture = Picture::create($data);

        //dd($data);



        return redirect()->route('admin.pictures.create')->with('message', "immagine creata con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        if ($picture->image) Storage::delete($picture->image);
        $picture->delete();

        return redirect()->route('admin.pictures.create');
    }
}
