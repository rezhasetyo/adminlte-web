<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'tahun', 'ringkasan', 'poster','genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);     // Yang tidak ada foreign key nya (Relasi One to Many) (belongsTo)
    }

    public function kritik(){
        return $this->hasMany(Kritik::class);
    }

}
