<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glerk extends Model
{
    //
    public $fillable = ['content'];

    public function owner() {
        return $this->belongsTo(User::class);
    }
}
