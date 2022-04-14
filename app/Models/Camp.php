<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
use App\Models\Chekout;

class Camp extends Model
{
    use HasFactory, SoftDeletes;
     protected $fillabel =  ['title', 'price'];

     public function getIsRegisteredAttribute() {
        if (!Auth::check()) {
            return false;
        }

        return Chekout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
     }
}
