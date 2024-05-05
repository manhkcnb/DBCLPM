<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khoa extends Model
{
    use HasFactory;
    public  $table = 'khoa';
    public function monhoc(){
        return $this->hasOne(Monhoc::class);
    }

}
