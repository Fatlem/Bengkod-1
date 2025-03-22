<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeriksa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $table = "detail_periksas";
    
    protected $fillable = [
        'id_periksa',
        'id_obat',
    ];

    /**
     * Get the periksa associated with the detail.
     */
    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }

    /**
     * Get the obat associated with the detail.
     */
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}
