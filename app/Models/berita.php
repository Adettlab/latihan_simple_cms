<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class berita extends Model
{
    use HasFactory;
    
    public $table = 'tables_berita';
    protected $guarded = ['id'];
    // public $fillable = [
    //     'judul',
    //     'isiPost',
    //     'gambar',
    //     'penulis',
    // ];
    public function category()
    {
        return $this->belongsTo(category::class,'id_categories','id_categories');
    }
    

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
