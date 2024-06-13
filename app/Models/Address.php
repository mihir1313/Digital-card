<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'address';
    public $timestamps = false;

    protected $fillable = [
        'id','description','location'
    ];
}