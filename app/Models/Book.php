<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'publisher_id'];

    public function author()
    {
        return $this->belongsTo(\App\Models\Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(\App\Models\Publisher::class);
    }
}
