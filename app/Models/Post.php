<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * the attribute that are mass assingable
     * 
     * @var array
     */
    protected $fillable = [
        'title','body'
    ];
}
