<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Periksa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $table = "periksas";

    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    /**
     * Get the formatted tgl_periksa attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getTglPeriksaAttribute($value)
    {
        return Carbon::parse($value)->format('d M Y H:i');
    }

    /**
     * Get the pasien associated with the periksa.
     */
    public function pasien()
    {
        return $this->belongsTo(User::class, 'id_pasien');
    }

    /**
     * Get the dokter associated with the periksa.
     */
    public function dokter()
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }

    public function obat()
    {
        return $this->belongsToMany(Obat::class, 'detail_periksas', 'id_periksa', 'id_obat');
    }
}
