<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotosBegin extends Model
{
    protected $table = 'photos_begin';
    protected $primarykey='id_photo_begin';
    protected $fillable= ['archivo'];
    public $timestamps = false;
}
