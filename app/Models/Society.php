<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Society extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public $timestamps = false;
    public $fillable = [
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
