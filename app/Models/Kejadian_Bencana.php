<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kejadian_Bencana extends Model
{
    protected $table = 'kejadian_bencana';

    protected $primaryKey = 'kejadian_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'jenis_bencana',
        'tanggal',
        'lokasi_text',
        'rt',
        'rw',
        'dampak',
        'status_kejadian',
        'keterangan',
    ];

    public $timestamps = true;

    protected $casts = [
        'tanggal' => 'date',
    ];
}
