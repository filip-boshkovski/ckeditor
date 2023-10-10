<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'gender', 'schedule'];

    protected $casts = [
        'schedule' => 'datetime: H:i',
    ];
}
