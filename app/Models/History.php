<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uid',
        'jenis_history',
        'idprkt',
        'kerusakan',
        'perbaikan',
        'tanggal',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'uid');
    }
    
}
