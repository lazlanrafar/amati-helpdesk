<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lokasi;

class SSID extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idlok',
        'nama_ssid',
        'pwd_ssid',
        'jenis_ssid',
        'keterangan',
    ];

    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'idlok', 'id');
    }
}
