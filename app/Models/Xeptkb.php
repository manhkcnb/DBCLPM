<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xeptkb extends Model
{
    use HasFactory;
    public $timestamps = false;
    public  $table = 'xeptkb';
    protected $fillable = [
        'monhoc_id', // Thêm monhoc_id vào trong mảng fillable
        'phonglt_id',
        'thult_id',
        'thoigianlt_id',
        'phongth_id',
        'thuth_id',
        'thoigianlt2_id',
        'phonglt2_id',
        'thult2_id',
        'stt',
    ];
    public function monhoc(){
        return $this->belongsTo(Monhoc::class,'monhoc_id','id');
    }
    public function phonglt(){
        return $this->belongsTo(Phong::class,'phonglt_id','id');
    }
    public function thult(){
        return $this->belongsTo(Thu::class,'thult_id','id');
    }
    public function thoigianlt(){
        return $this->belongsTo(Thoigian::class,'thoigianlt_id','id');
    }
    public function phonglt2(){
        return $this->belongsTo(Phong::class,'phonglt2_id','id');
    }
    public function thult2(){
        return $this->belongsTo(Thu::class,'thult2_id','id');
    }
    public function thoigianlt2(){
        return $this->belongsTo(Thoigian::class,'thoigianlt2_id','id');
    }
    public function phongth(){
        return $this->belongsTo(Phong::class,'phongth_id','id');
    }
    public function thuth(){
        return $this->belongsTo(Thu::class,'thuth_id','id');
    }
    public function thoigianth(){
        return $this->belongsTo(Thoigianth::class,'thuth_id','id');
    }
}
