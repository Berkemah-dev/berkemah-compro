<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'using_mahya_hris',
        'using_mahya_hse',
    ];
}
