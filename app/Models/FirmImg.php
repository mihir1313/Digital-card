<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class FirmImg extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'firm_img';
    public $timestamps = false;

    protected $fillable = [
        'id','img','created_at','updated_at'
    ];
}