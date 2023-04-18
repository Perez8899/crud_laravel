<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'option',
        'category_id'
    ];

    public function category()
    {
        //ONE to ONE cardinality
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}