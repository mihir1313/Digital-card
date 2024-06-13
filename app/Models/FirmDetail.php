<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class FirmDetail extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'firm_details';
    public $timestamps = false;

    protected $fillable = [
        'id','firm_name','firm_type','description',
    ];
}