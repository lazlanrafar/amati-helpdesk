<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessPoint extends Model
{
    use HasFactory;
    public $incrementing = false;

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
}
