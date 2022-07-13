<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idlok',
        'idbrand',
        'jenis_hardware',
        'koneksi',
        'ipaddress',
        'computer_name',
        'sharing',
        'tgl_inventaris',
        'keterangan',
    ];
}
