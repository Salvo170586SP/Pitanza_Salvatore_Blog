<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Language;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects = Project::orderBy('updated_at','DESC')->paginate(10);
        
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        $languages = Language::all();

        return view('admin.projects.create', compact('project', 'languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* dd($request->all()); */

        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image',
            'languages' => 'nullable|exists:languages,id'
      ], [
            'title.required' => 'il titolo è obbligatorio',
            'title.min' => 'il titolo deve avere almeno 5 caratteri',
            'title.max' => 'il titolo non può avere più di 255 caratteri',
            'languages.exists' => 'uno dei tag selezionati non è valido'
        ]);

        
        $data = $request->all();

        
        if (array_key_exists('img', $data)) {
            $img_url = Storage::put('proj_image', $data['img']);
            $data['img'] = $img_url;
        }

        $new_project = Project::create($data);

        if(array_key_exists('languages', $data))$new_project->languages()->attach($data['languages']);
       
        return redirect()->route('admin.projects.index')->with('message', "Progetto creato con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $languages = Language::all();
        $project_languages_ids = $project->languages->pluck('id')->toArray();

        return view('admin.projects.edit', compact('project', 'languages', 'project_languages_ids'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image',
            'languages' => 'nullable|exists:languages,id'

        ], [
            'title.required' => 'il titolo è obbligatorio',
            'title.min' => 'il titolo deve avere almeno 5 caratteri',
            'title.max' => 'il titolo non può avere più di 255 caratteri',
            'languages.exists' => 'uno dei tag selezionati non è valido'

        ]);

        $data = $request->all();

        if (array_key_exists('img', $data)) {
            if ($project->img) Storage::delete($project->img);

            $img_url = Storage::put('proj_image', $data['img']);
            $data['img'] = $img_url;
        }

        $project->update($data);
        if(!array_key_exists('languages', $data)) $project->languages()->detach();
        else $project->languages()->sync($data['languages']);

        return redirect()->route('admin.projects.show', $project)->with('message', "Progetto aggiornato con successo");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->img) Storage::delete($project->img);

        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
