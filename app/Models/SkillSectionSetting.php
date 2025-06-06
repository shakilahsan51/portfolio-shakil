<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillSectionSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'sub_title',
        'image'
    ];
}
