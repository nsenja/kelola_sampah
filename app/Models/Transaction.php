<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'tanggal_transaksi',
        'jumlah',
        'description',
        'user_id'
    ];

    // protected $dates = ['tanggal_transaksi'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
