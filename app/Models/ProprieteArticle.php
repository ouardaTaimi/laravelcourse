<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteArticle extends Model
{
    protected $table = 'propriete_articles';

    use HasFactory;

    //une proprite app a une seul type article
    public function type()
    {
        return $this->belongsTo(TypeArticle::class, "type_article_id", "id");
    }
}
