<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'writer', 'image', 'body', 'deskripsi'];
}
