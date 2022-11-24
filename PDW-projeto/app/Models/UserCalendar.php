<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCalendar extends Model
{
    use HasFactory;

    protected $table='user_calendar';

    protected $fillable=[
        "id_user",
        "id_recipe",
        "date"
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function recipe(){
        return $this->hasOne(Recipe::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

}
