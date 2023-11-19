<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

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

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
