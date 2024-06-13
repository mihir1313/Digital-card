<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'reviews';
    public $timestamps = false;

    protected $fillable = [
        'id','description'
    ];
}