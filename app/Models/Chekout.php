<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chekout extends Model
{
    use HasFactory, SoftDeletes;

    //isinya menyesuaikan tabel yang akan di isi
    protected $fillable = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];

    public function setExpiredAttribute ($value) {
        $this->attributes['expired'] = date ('Y-m-t', strtotime($value));
    }

    public function Camp(): BelongsTo {
        return $this->belongsTo(Camp::class);
    }
}
