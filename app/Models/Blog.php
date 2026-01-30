<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'categorie_id', 'description', 'created_at'];
        public function categorie()
    {
        return $this->belongsTo(Categorie::class, "categorie_id");
    }
}
