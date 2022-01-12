<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kendaraan;

class Perjalanan extends Model
{
    protected $table = 'perjalanans';
    protected $guarded = 'id';
    protected $fillable = [
        'kendaraan_id',
        'lama_perjalanan',
        'tempat_berangkat',
        'tempat_tujuan',
        'tanggal_berangkat',
        'tanggal_kembali'
    ];

    /**
     * Get the kendaraan that owns the Perjalanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }
    use HasFactory;
}