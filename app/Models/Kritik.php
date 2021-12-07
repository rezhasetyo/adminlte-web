<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;
    protected $fillable = ['isi', 'point', 'film_id','user_id'];

    // YANG TIDAK ADA FOREIGN KEY NYA MENGGUNAKAN (belongsTo)
    public function user()
        {   return $this->belongsTo(User::class);    }
    public function film()
        {   return $this->belongsTo(Film::class);    }
}
