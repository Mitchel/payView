<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $hidden = [
      'user'
    ];

    protected $fillable = [
        'user', 'category', 'type', 'amount', 'day', 'month', 'year'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category','id');
    }
}
