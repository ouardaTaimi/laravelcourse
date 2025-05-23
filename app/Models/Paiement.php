<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $table = 'paiements';

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function location()
    {
        return $this->belongsTo(Location::class, "location_id", "id");
    }
}
