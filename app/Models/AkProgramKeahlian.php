<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkProgramKeahlian extends Model
{
    use HasFactory;
    protected $table = 'ak_program_keahlians';
    protected $fillable = [
        'parent_id',
        'nama',
        'level',
        'order',
        'singkatan',
    ];

    // Membuat relasi dengan dirinya sendiri (parent-child relationship)
    public function parent()
    {
        return $this->belongsTo(AkProgramKeahlian::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(AkProgramKeahlian::class, 'parent_id');
    }
}
