<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chekout extends Model
{
    use HasFactory, SoftDeletes;

    //isinya menyesuaikan tabel yang akan di isi
    protected $fillabel = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];
}
