<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sympton extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Jika nama tabel tidak sesuai dengan konvensi, tentukan secara eksplisit
    protected $table = 'symptons';

    protected $fillable = ['kode_gejala', 'gejala'];

    public function rules()
    {
        return $this->hasMany(Rule::class, 'kode_gejala', 'kode_gejala');
    }
}
