<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessPoint extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idap',
        'idlok',
        'idbrand',
        'jenis_ap',
        'jumlah_port',
        'frekuensi',
        'tgl_inventaris',
        'keterangan',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class, 'idbrand');
    }

    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'idlok');
    }
}
