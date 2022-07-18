<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SwitchHub;

class Link extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idswitch',
        'uid',
        'port',
        'status',
        'arah',
        'keterangan',
    ];

    public function switch(){
        return $this->belongsTo(SwitchHub::class, 'idswitch');
    }

    public function user(){
        return $this->belongsTo(User::class, 'uid');
    }
}
