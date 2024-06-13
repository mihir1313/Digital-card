<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class MainDetail extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'main_details';
    public $timestamps = false;

    protected $fillable = [
        'id','phone','email','address'
    ];
}