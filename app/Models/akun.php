<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    
    use HasFactory;
    protected $fillable = ['name','email','username','password'];
    protected $table = 'users';
    public $timestamps = false;
}