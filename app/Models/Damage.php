<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Jika nama tabel tidak sesuai dengan konvensi, tentukan secara eksplisit
    protected $table = 'damages';

    protected $fillable = ['kode_kerusakan', 'kerusakan'];

    public function rules()
    {
        return $this->hasMany(Rule::class, 'kode_kerusakan', 'kode_kerusakan');
    }
}
