<?php

namespace App\Models;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';
    protected $fillable = ['categorie'];
        public function blogs()
    {
        return $this->hasMany(Blog::class,'categorie_id');
    }   
}
