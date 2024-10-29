<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;
    protected $fillable  = [
        "title","description","thumb","price","series","release_date","type","genre","artist"
    ];
}
