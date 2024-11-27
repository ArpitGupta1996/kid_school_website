<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'guardian_name',
        'guardian_email',
        'child_name',
        'child_age',
        'message'
    ];
}
