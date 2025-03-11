<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // protected $table = 'roles';

    use HasFactory;

    // first la cle etranger de primaire of this table then the oher table 
    public function users()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->belongsToMany(User::class, "user_role", "role_id", "user_id");
    }
}
