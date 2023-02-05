<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etagere extends Model
{
    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }
}
