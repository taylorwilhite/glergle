<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glerk extends Model
{
    //
    public $fillable = ['content', 'owner_id'];

    public function owner() {
        return $this->belongsTo(User::class);
    }
}
