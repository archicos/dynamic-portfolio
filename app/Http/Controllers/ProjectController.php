<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::get();
        return view('welcome', ['projectList'=> $project]);
    }

    public function create()
    {
        dd('berhasil');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required',
            'category'=> 'required',
        ]);

        if( $request->file('image') ){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->project_name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('content/project', $newName);
        }

        $proj = new Project;

        // $proj->project_name = $request->input('project_name');
        // $proj->category = $request->input('category');

        // if($request->input('description')){
        //     $proj->description = $request->input('description');
        // }
        // if($request->input('badge')){
        //     $proj->badge = $request->input('badge');
        // }
        // if($request->input('image')){
        //     $proj->image = $request->file('image');
        // }

        // $proj->save();
        // $proj = Project::create($request->all());

        $proj = Project::create([
            'project_name' => $request->input('project_name'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'badge' => $request->input('badge'),
            'image' => $newName, // menyimpan nama file yang baru di sini
        ]);

        return redirect('/admin')->with('success','Data saved');
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'project_name'=> 'required',
            'category'=> 'required',
        ]);
        
        $proj = Project::findOrFail($id);
        // $project->project_name = $request->input('project_name');
        // $project->category = $request->input('category');
        // $project->image = $request->input('image');
        // $project->description = $request->input('description');
        // $project->badge = $request->input('badge');
        // $project->save();

        $newName = null;

        if( $request->file('image') ){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->project_name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('content/project', $newName);
        }

        $updateData = [
            'project_name' => $request->input('project_name'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'badge' => $request->input('badge'),
        ];

        if ($newName) {
            $updateData['image'] = $newName;
        }

        // $proj->update($updateData);
        $proj->update([
            'project_name' => $request->input('project_name'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'badge' => $request->input('badge'),
            'image' => $newName ?? $proj->image, // gunakan nilai existing jika tidak ada file baru
        ]);


        return redirect('/admin')->with('success','Data Updated!');
    }

    public function destroy(string $id)
    {
        $deletedProject = Project::findOrFail($id);

        $deletedProject->delete(); 
        
        if($deletedProject) {
            Session::flash('status', 'success');
            Session::flash('message', 'Project successfully deleted!');
        }

        return redirect('/admin')->with('success','Data Deleted!');
    }
}
