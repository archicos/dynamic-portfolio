<?php

namespace App\Http\Controllers;

use App\Models\Softskill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SoftskillController extends Controller
{
    public function index()
    {
        $softskill = Softskill::get();
        return view('welcome', ['softskillList'=> $softskill]);
    }

    public function create()
    {
        dd('berhasil');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'skill_name' => 'required',
            'percentage'=> 'required',
        ]);

        $soft = new Softskill;

        $soft->skill_name = $request->input('skill_name');
        $soft->percentage = $request->input('percentage');

        $soft->save();

        return redirect('/')->with('success','Data saved');
    }

    public function edit($id)
    {
        $softskill = Softskill::findOrFail($id);

        // if (!$experience) {
        //     abort(404); // Atau tindakan lain sesuai kebutuhan Anda
        // }

        return view('welcome', compact('softskill'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'skill_name'=> 'required',
            'percentage'=> 'required',
        ]);

        $softskill = Softskill::findOrFail($id);
        $softskill->skill_name = $request->input('skill_name');
        $softskill->percentage = $request->input('percentage');
        $softskill->save();

        return redirect('/')->with('success','Data Updated!');
    }

    public function destroy(string $id)
    {
        $deletedSoftskill = Softskill::findOrFail($id);

        $deletedSoftskill->delete(); 
        
        if($deletedSoftskill) {
            Session::flash('status', 'success');
            Session::flash('message', 'Softskill successfully deleted!');
        }

        return redirect('/')->with('success','Data Deleted!');
    }
}
