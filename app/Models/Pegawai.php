<?php

namespace App\Models;

use App\Models\Pengikut;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';
    protected $guarded = 'id';
    protected $fillable = [
        'pangkat_id',
        'jabatan_id',
        'nama',
        'nip'
    ];
    /**
     * Get the pangkat that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pangkat(): BelongsTo
    {
        return $this->belongsTo(Pangkat::class);
    }

    /**
     * Get the jabatan that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

    /**
     * Get the pengikut that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengikut(): BelongsTo
    {
        return $this->belongsTo(Pengikut::class);
    }
}