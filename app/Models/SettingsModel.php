<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory; 

class SettingsModel extends Model
{
    //
    use HasFactory;
    protected $table = 'generalSettings';
    protected $fillable = ['system_name', 'system_tagline', 'system_logo', 'system_favicon',];
}
