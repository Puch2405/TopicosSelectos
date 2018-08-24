<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primarykey='id_comment';
    protected $fillable= ['descripcion','id_user'];
    public $timestamps = false;
}
