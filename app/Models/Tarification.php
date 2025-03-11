<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    protected $table = 'tarifications';

    use HasFactory;

    public function article()
    {
        return $this->belongsTo(Article::class, "article_id", "id");
    }

    public function dureeLocation()
    {
        return $this->belongsTo(DureeLocation::class, "duree_location_id", "id");
    }
}
