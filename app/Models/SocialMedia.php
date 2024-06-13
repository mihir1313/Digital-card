<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class SocialMedia extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'social_media';
    public $timestamps = false;

    protected $fillable = [
        'id','facebook','youtube','instagram','linkedIn'
    ];
}