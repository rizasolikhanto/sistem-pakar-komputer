<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Jika nama tabel tidak sesuai dengan konvensi, tentukan secara eksplisit
    protected $table = 'rules';
    protected $fillable = ['kode_kerusakan', 'kode_gejala'];

    public function symptons()
    {
        return $this->belongsTo(Sympton::class, 'kode_gejala', 'kode_gejala');
    }
    public function damages()
    {
        return $this->belongsTo(Damage::class, 'kode_kerusakan', 'kode_kerusakan');
    }
}
