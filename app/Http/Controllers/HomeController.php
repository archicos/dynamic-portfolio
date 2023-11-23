<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Softskill;
use App\Models\Experience;

use Illuminate\Http\Request;
use App\Http\Controllers\SoftskillController;
use App\Http\Controllers\ExperienceController;

class HomeController extends Controller
{
    public function index()
    {
        $experience = Experience::get();
        $softskill = Softskill::get();
        $project = Project::get();

        return view('welcome', ['experienceList' => $experience, 'softskillList' => $softskill, 'projectList'=> $project]);
    }
    public function home()
    {
        $experience = Experience::get();
        $softskill = Softskill::get();
        $project = Project::get();

        return view('homepage', ['experienceList' => $experience, 'softskillList' => $softskill, 'projectList'=> $project]);
    }
}

