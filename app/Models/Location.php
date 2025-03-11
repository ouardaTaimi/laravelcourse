<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function client()
    {
        return $this->belongsTo(Client::class, "client_id", "id");
    }


    public function statut()
    {
        return $this->belongsTo(StatutLocation::class, "statut_location_id", "id");
    }
    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
    //get the articles of the location(relations many to many , ,ew table is created)

    public function articles()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->belongsToMany(Article::class, "article_location", "location_id", "article_id");
    }
}
