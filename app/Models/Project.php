<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'project_image' => 'array',
    ];

    protected $fillable = ['project_name', 'project_description', 'project_image', 'project_start_date', 'project_end_date'];
}
