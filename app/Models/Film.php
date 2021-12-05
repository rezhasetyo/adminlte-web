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
        return $this->belongsTo(Genre::class);     // Yang ada foreign key nya (Relasi One to Many) (BELONGSTO)
    }

}
