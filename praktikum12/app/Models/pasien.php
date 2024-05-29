<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    //tsble adalah property laravel yang didalamnya terkoneksi dengan 
    // nama table yang mau kita tampilkan datanya
    // tetapi hanya dapat diakses di dalam class model tersebut ataupun turunannya

    protected $fillable = [
        'id',
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat'
        ,'kelurahan_id'
    ];

        public $timestamps = false;
        
        public function kelurahan(){

            return $this->belongsTo(kelurahan::class);
        }
        
    //fillable adalah variable dalam model eloquent yang tugasnya
    //membatasi kolom mana yang dapat di isi atau di input
}

