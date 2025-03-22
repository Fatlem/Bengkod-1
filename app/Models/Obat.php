<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $table = "obats";

    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga',
    ];

    /**
     * Get the details for the obat.
     */
    public function detailPeriksa()
    {
        return $this->hasMany(DetailPeriksa::class, 'id_obat');
    }

    /**
     * Accessor for formatting the harga attribute.
     */
    public function getHargaAttribute($value)
    {
        return number_format($value, 0, ',', '.');
    }
}
