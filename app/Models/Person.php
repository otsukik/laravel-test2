<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public static $rules = [
        'name' => 'required|string|max:100',
        'email' => 'required|string|email|max:150|unique:users'
    ];
}
