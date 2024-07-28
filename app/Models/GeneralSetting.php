<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = ['favicon_image', 'logo_image', 'address', 'email', 'phone_no', 'facebook_link', 'twitter_link', 'instagram_link', 'linkedin_link', 'short_address'];
}   
