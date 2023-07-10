<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    public $guarded = ['id'];

    protected $timestamps = false;
    protected $fillable = [
        'name',
        'password',
        'born_date',
        'gender',
        'address',
        'token',
        'regional_id',
        'regional_province',
        'regional_district'
    ];
}
