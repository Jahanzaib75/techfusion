<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    protected $fillable = [
        "id",
        "email",
        "created_at",
        "updated_at"
    ];
}
