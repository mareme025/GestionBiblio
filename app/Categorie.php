<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    
    protected $guarded = [];

    protected $table="categories";

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
