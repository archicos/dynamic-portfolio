<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softskill extends Model
{
    use HasFactory;

    protected $table = "softskills";
    protected $fillable = ['skill_name', 'percentage'];
}
