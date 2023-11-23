<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ToolController extends Controller
{
    public function index()
    {
        $tool = Tool::get();
        return view('welcome', ['toolList'=> $tool]);
    }

    public function create()
    {
        dd('berhasil');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tool_name' => 'required',
            'percentage'=> 'required',
        ]);

        $tool = new Tool;

        $tool->tool_name = $request->input('tool_name');
        $tool->percentage = $request->input('percentage');

        $tool->save();

        return redirect('/')->with('success','Data saved');
    }

    public function edit($id)
    {
        $tool = Tool::findOrFail($id);

        // if (!$experience) {
        //     abort(404); // Atau tindakan lain sesuai kebutuhan Anda
        // }

        return view('welcome', compact('tool'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'tool_name'=> 'required',
            'percentage'=> 'required',
        ]);

        $tool = Tool::findOrFail($id);
        $tool->tool_name = $request->input('tool_name');
        $tool->percentage = $request->input('percentage');
        $tool->save();

        return redirect('/')->with('success','Data Updated!');
    }

    public function destroy(string $id)
    {
        $deletedTool = Tool::findOrFail($id);

        $deletedTool->delete(); 
        
        if($deletedTool) {
            Session::flash('status', 'success');
            Session::flash('message', 'Softskill successfully deleted!');
        }

        return redirect('/')->with('success','Data Deleted!');
    }
}
