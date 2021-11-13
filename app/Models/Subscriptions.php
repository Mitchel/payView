<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;

    protected $hidden = [
        'user'
    ];

    public function subscription()
    {
        return $this->belongsTo(User::class, 'id','id');
    }
}
