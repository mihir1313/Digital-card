<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class IconSetting extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'icons_setting';
    public $timestamps = false;

    protected $fillable = [
        'id','phone','phone_status','whatsapp','whatsapp_status','location','location_status','mail','mail_status','website','website_status','created_at','updated_at'	
    ];
}