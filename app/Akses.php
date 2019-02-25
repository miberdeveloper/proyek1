<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    protected $table = 'akses';
    protected $fillable = ['nama', 'deskripsi'];

    public function user() {
        $this->hasMany('App\User');
    }
}
