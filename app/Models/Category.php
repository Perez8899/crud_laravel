<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //record we have created
    protected $fillable = [
        'description'
    ];

    public function options()
    {
        //ONE to MANY cardinality
        return $this->hasMany('App\Models\Option', 'category_id', 'id');
    }
}