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

<<<<<<< Updated upstream
=======
    protected $fillable = [
        'user', 'category', 'type', 'amount', 'day', 'month', 'year'
    ];

>>>>>>> Stashed changes
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category','id');
    }
}
