<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SoftskillController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $experienceController = new ExperienceController();
        $softskillController = new SoftskillController();

        $experienceData = $experienceController->index();
        $softskillData = $softskillController->index();

        $data = [
            "experienceList" => $experienceData, 
            "softskillList" => $softskillData
        ];

        return view('welcome', $data);
    }
}
