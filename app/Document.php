<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    
    protected $fillable =['nomDocument','auteur','fichierDocument','dateEdition','categorie_id'];
    protected $table="documents";

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function etageres()
    {
        return $this->belongsToMany(Etagere::class);
    }
}
