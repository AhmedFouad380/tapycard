<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Card(){
        return $this->HasOne(Card::class,'profile_id')->withDefault([
            'id'=>0,
            'serial'=>''
        ]);
    }


}
