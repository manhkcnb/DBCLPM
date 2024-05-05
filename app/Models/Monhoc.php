<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    use HasFactory;
    public  $table = 'monhoc';
    protected $fillable = ['name', 'quantity', 'tin', 'thuchanh', 'lythuyet', 'khoa_id','kihoc','delete_tam'];
    public function khoa(){
        return $this->belongsTo(khoa::class,'khoa_id','id');
    }
}
