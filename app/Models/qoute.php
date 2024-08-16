<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qoute extends Model
{
    use HasFactory;
    protected $fillable=['firstname','lastname','contact','email','detail',];
}
