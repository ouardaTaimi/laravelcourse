<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // we want this modal uses methods and funtion for database we use hasfactory
    use HasFactory;
    protected $table = 'articles';

    // un article a un seul type_article
    public function type()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->belongsTo(TypeArticle::class, "type_article_id", "id");
    }
    public function tarifications()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->hasMany(Tarification::class);
    }
    //get the location of the article(relations many to many , ,ew table is created)
    public function locations()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->belongsToMany(Location::class, "article_location", "article_id", "location_id");
    }
    //article_propriete : la table de relation many a many 
    public function proprietes()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->belongsToMany(ProprieteArticle::class, "article_propriete", "article_id", "propriete_article_id");
    }
}
