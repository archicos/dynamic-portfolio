<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experience::get();
        return view('welcome', ['experienceList'=> $experience]);
    }

    public function create()
    {
        dd('berhasil');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description'=> 'required',
            'link'=> 'required',
        ]);

        $exps = new Experience;

        $exps->title = $request->input('title');
        $exps->description = $request->input('description');
        $exps->link = $request->input('link');

        $exps->save();

        return redirect('/')->with('success','Data saved');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);

        // if (!$experience) {
        //     abort(404); // Atau tindakan lain sesuai kebutuhan Anda
        // }

        return view('welcome', compact('experience'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title'=> 'required',
            'description'=> 'required',
            'link'=> 'required',
        ]);

        $experience = Experience::findOrFail($id);
        $experience->title = $request->input('title');
        $experience->description = $request->input('description');
        $experience->link = $request->input('link');
        $experience->save();

        return redirect('/')->with('success','Data Updated!');
    }

    public function destroy(string $id)
    {
        $deletedExperience = Experience::findOrFail($id);

        $deletedExperience->delete(); 
        
        if($deletedExperience) {
            Session::flash('status', 'success');
            Session::flash('message', 'Student successfully deleted!');
        }

        return redirect('/')->with('success','Data Deleted!');
    }
}
