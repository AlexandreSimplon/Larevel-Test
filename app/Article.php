<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";

    public function auteur() {
        return $this->hasOne('App\User',  'id', 'user_id');
    }
}
