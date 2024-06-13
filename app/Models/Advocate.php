<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Advocate extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'advocates';
    public $timestamps = false;

    protected $fillable = [
        'id','name','position','qualification','img','phone','status'
    ];
}