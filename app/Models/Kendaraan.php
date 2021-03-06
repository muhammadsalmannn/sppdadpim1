<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraans';
    protected $guarded = 'id';
    protected $fillable = [
        'nama'
    ];
    use HasFactory;
}