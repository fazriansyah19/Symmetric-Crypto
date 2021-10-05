<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decrypt extends Model
{
    use HasFactory;
    protected $fillable = [
        'original',
        'decrypted'
    ];
}
