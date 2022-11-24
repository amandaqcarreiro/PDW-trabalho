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
        "url",
        "id_user"
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function days(){
        return $this->belongsToMany(User::class);
    }

}
