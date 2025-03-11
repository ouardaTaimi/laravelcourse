<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function paiements()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->hasMany(Paiement::class);
    }
    // first la cle etranger de primaire of this table then the oher table 
    public function roles()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->belongsToMany(Role::class, "user_role", "user_id", "role_id");
    }
    public function permissions()
    {
        // return    $this->belongsTo(TypeArticle::class);
        return  $this->belongsToMany(Permission::class, "user_permission", "user_id", "permission_id");
    }
}
