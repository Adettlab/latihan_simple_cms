<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    use HasFactory;
    public $table = 'categories';

    public $fillable = [
        'nama',
        'tgl_publikasi',
    ];
     
    public function berita()
    {
        return $this->HasMany(berita::class);
    }
}
