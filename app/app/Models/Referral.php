<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Referral extends Model
{
    use HasFactory; 
    // field lain boleh diisi, id jangan
    protected $guarded = ['id'];

    // eloquent relationship dengan model user, satu referral hanya akan dimiliki oleh 1 user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
 