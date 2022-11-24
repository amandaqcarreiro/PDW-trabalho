<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table='recipes';
    protected $fillable = [
        'name',
        "url"
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'recipe_user');
    }

    public function days(){
        return $this->belongsToMany(User::class);
    }

}
