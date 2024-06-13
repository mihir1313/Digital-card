<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class About extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'about';
    public $timestamps = false;

    protected $fillable = [
        'id','description'
    ];
}