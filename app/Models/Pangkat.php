<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $table = 'pangkats';
    protected $guarded = 'id';
    protected $fillable = [
        'golongan', 'ruang'
    ];
    use HasFactory;
}