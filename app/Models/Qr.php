<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Qr extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'qr';
    public $timestamps = false;

    protected $fillable = [
        'id','img','created_at','updated_at'
    ];
}