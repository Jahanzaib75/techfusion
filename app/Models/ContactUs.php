<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        "id",
        "fname",
        "lname",
        "email",
        "phonenumber",
        "message",
        "created_at",
        "updated_at"
    ];
}
