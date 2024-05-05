<?php

namespace App\Http\Controllers;

use App\Http\Requests\XeptkbRequest;
use App\Models\khoa;
use App\Models\Monhoc;
use App\Models\Phong;
use App\Models\Thoigian;
use App\Models\Xeptkb;
use App\Models\Thu;
use App\Models\Thoigianth;
use Illuminate\Http\Request;
use DB;


class XeptkbController extends Controller
{
    public function read(){
        $data = Xeptkb::with([
            'monhoc',
            'phonglt',
            'thult',
            'thoigianlt',
            'phongth',
            'thuth',
            'thoigianth',
            'phonglt2',
            'thult2',
            'thoigianlt2',
        ])->paginate(10);
        // dd($data);
       return view('xeptkb.xemtkb',['data'=>$data]);

    }
    public function create(Request $request){
        $monhoc = Monhoc::where('delete_tam','0')->get(); 
        // dd($monhoc);
        foreach ($monhoc as $key => $mh) {
            $count = Xeptkb::where('monhoc_id', $mh->id)->count(); 
           
            
            if ($count == $mh->quantity) {
        
                  unset($monhoc[$key]);
                  
            }
        }
        $phonglt=Phong::where('name', 'not like', '%th%')->get();
        
        $phongth=Phong::where('name', 'like', '%th%')->get();
        $khoa = khoa::get();
        $tg=Thoigian::where('name', 'not like', '%n%')->get();
        $tg1=Thoigian::where('name', 'like', '%n%')->get();
        $tgth= Thoigianth::get();
        // dd($monhoc);
        // dd($tgth);

        return view('xeptkb.create_update',['monhoc'=>$monhoc,'stt'=>null,'phonglt'=>$phonglt,'thoigian'=>$tg,'phongth'=>$phongth,'thoigianth'=>$tgth,'khoa'=>$khoa,'tg1'=>$tg1]);

    }
    public function createPost(XeptkbRequest $request){
        //  dd($request->all());
        $monhoc =$request->get('monhoc');
        $stt =$request->get('stt');
        $phonglt =$request->get('phonglt');
        $thoigian =$request->get('thoigian');
        $thult =$request->get('thult');
        $phongltt =$request->get('phongltt');
        $thoigiant =$request->get('thoigiant');
        $thultt =$request->get('thultt');
        $phonglt4tin =$request->get('phonglt4tin');
        $thoigian4tin =$request->get('thoigian4tin');
        $thult4tin =$request->get('thult4tin');
        $phongth=$request->get('phongth');
        $thuth =$request->get('thuth');
    
         
        $m= Monhoc::where('id',$monhoc)->first();
        if($m->tin<=2){
            Xeptkb::create(['monhoc_id'=>$monhoc,'phonglt_id'=>$phonglt,'thult_id'=>$thult,'thoigianlt_id'=>$thoigian,'phongth_id'=>$phongth,'thuth_id'=>$thuth,'stt'=>$stt]);
        }else if($m->tin==3) {
            $data =  Xeptkb::create(['monhoc_id'=>$monhoc,'phonglt_id'=>$phonglt,'thult_id'=>$thult,'thoigianlt_id'=>$thoigian,'phongth_id'=>$phongth,'thuth_id'=>$thuth,'phonglt2_id'=>$phongltt,'thult2_id'=>$thultt,'thoigianlt2_id'=>$thoigiant,'stt'=>$stt]);
            // dd($data);
        }else {
            Xeptkb::create(['monhoc_id'=>$monhoc,'phonglt_id'=>$phonglt,'thult_id'=>$thult,'thoigianlt_id'=>$thoigian,'phongth_id'=>$phongth,'thuth_id'=>$thuth,'phonglt2_id'=>$phonglt4tin,'thult2_id'=>$thult4tin,'thoigianlt2_id'=>$thoigian4tin,'stt'=>$stt]);
        }
        return redirect()->route('xeptkb');
    }
    
    public function update(Request $request,$id){
        $row=Xeptkb::find($id);
        $monhoc = Monhoc::where('delete_tam','0')->get(); 
        // dd($monhoc);
        foreach ($monhoc as $key => $mh) {
            $count = Xeptkb::where('monhoc_id', $mh->id)->count(); 
           
            
            if ($count == $mh->quantity) {
        
                  unset($monhoc[$key]);
                  
            }
        }
        $phonglt=Phong::where('name', 'not like', '%th%')->get();
        
        $phongth=Phong::where('name', 'like', '%th%')->get();
        $khoa = khoa::get();
        $tg=Thoigian::where('name', 'not like', '%n%')->get();
        $tg1=Thoigian::where('name', 'like', '%n%')->get();
        $tgth= Thoigianth::get();
        $thult=[];
        $thult2=[];
        $thuth=[];
        $thu=Thu::get();
        foreach($thu as $k){
            $kk=Xeptkb::where('phonglt_id',$row->phonglt_id)->where('thoigianlt_id',$row->thoigianlt_id)->where('thult_id',$k->id)->first();
            $kk2=Xeptkb::where('phonglt2_id',$row->phonglt2_id)->where('thoigianlt2_id',$row->thoigianlt2_id)->where('thult2_id',$k->id)->first();
            if($kk==null&& $kk2==null||$kk==$row){
                $thult[]=$k;
            }
        }
        foreach($thu as $k){
            $kk=Xeptkb::where('phonglt_id',$row->phonglt_id)->where('thoigianlt_id',$row->thoigianlt_id)->where('thult_id',$k->id)->first();
            $kk2=Xeptkb::where('phonglt2_id',$row->phonglt2_id)->where('thoigianlt2_id',$row->thoigianlt2_id)->where('thult2_id',$k->id)->first();
            if($kk==null&& $kk2==null||$kk2==$row){
                $thult2[]=$k;
            }
        }
        // foreach($tg as $k){
        //     $kk=Xeptkb::where('phongth_id',$phong_id)->where('thult_id',$k->id)->first();
        //     if($kk==null){
        //         $arr[]=$k;
        //     }
        // }

        // dd($monhoc);
        //  dd($thult);

        return view('xeptkb.update',['thult2'=>$thult2,'thult'=>$thult,'monhoc'=>$monhoc,'stt'=>null,'phonglt'=>$phonglt,'thoigian'=>$tg,'phongth'=>$phongth,'thoigianth'=>$tgth,'khoa'=>$khoa,'tg1'=>$tg1,'row'=>$row]);

    }
    public function updatePost(XeptkbRequest $request,$id){
        // dd($request->all());
        $monhoc =$request->get('monhoc');
        $stt =$request->get('stt');
        $phonglt =$request->get('phonglt');
        $thoigian =$request->get('thoigian');
        $thult =$request->get('thult');
        $phongltt =$request->get('phongltt');
        $thoigiant =$request->get('thoigiant');
        $thultt =$request->get('thultt');
        $phonglt4tin =$request->get('phonglt4tin');
        $thoigian4tin =$request->get('thoigian4tin');
        $thult4tin =$request->get('thult4tin');
        $phongth=$request->get('phongth');
        $thuth =$request->get('thuth');
    
         
        $m= Monhoc::where('id',$monhoc)->first();
        if($m->tin<=2){
            Xeptkb::where('id',$id)->update(['monhoc_id'=>$monhoc,'phonglt_id'=>$phonglt,'thult_id'=>$thult,'thoigianlt_id'=>$thoigian,'phongth_id'=>$phongth,'thuth_id'=>$thuth,'stt'=>$stt]);
        }else if($m->tin==3) {
            Xeptkb::where('id',$id)->update(['monhoc_id'=>$monhoc,'phonglt_id'=>$phonglt,'thult_id'=>$thult,'thoigianlt_id'=>$thoigian,'phongth_id'=>$phongth,'thuth_id'=>$thuth,'phonglt2_id'=>$phongltt,'thult2_id'=>$thultt,'thoigianlt2_id'=>$thoigiant,'stt'=>$stt]);
            // dd($data);
        }else {
            Xeptkb::where('id',$id)->update(['monhoc_id'=>$monhoc,'phonglt_id'=>$phonglt,'thult_id'=>$thult,'thoigianlt_id'=>$thoigian,'phongth_id'=>$phongth,'thuth_id'=>$thuth,'phonglt2_id'=>$phonglt4tin,'thult2_id'=>$thult4tin,'thoigianlt2_id'=>$thoigian4tin,'stt'=>$stt]);
        }
        return redirect()->route('xeptkb');
    }
    public function delete($id){
        $tkb = Xeptkb::find($id);
        $tkb->delete();
        return redirect()->route('xeptkb');
    }
    public function soluong($monhoc_id){
        // dd(1);
        $arr=[];
        $soluonglop = Monhoc::find($monhoc_id)->quantity;
        for($i=1;$i<=$soluonglop;$i++){
            $k = Xeptkb::where('monhoc_id',$monhoc_id)->where('stt',$i)->first();
            if($k==null){
                $arr[] = $i;
            }

        }
      
        return response()->json(['soluonglop' => $arr]);
    }
    public function tg($phong_id,$tg){
        $thu=Thu::get();
        $arr=[];
        foreach($thu as $k){
            $kk=Xeptkb::where('phonglt_id',$phong_id)->where('thoigianlt_id',$tg)->where('thult_id',$k->id)->first();
            $kk2=Xeptkb::where('phonglt2_id',$phong_id)->where('thoigianlt2_id',$tg)->where('thult2_id',$k->id)->first();
            if($kk==null&& $kk2==null){
                $arr[]=$k;
            }
        }
     
        return response()->json(['thult' => $arr]);
    }
    public function tg1($phong_id,$tg){
        $thu=Thu::get();
        $arr=[];
        foreach($thu as $k){
            $kk=Xeptkb::where('phonglt_id',$phong_id)->where('thoigianlt_id',$tg)->where('thult_id',$k->id)->first();
            $kk2=Xeptkb::where('phonglt2_id',$phong_id)->where('thoigianlt2_id',$tg)->where('thult2_id',$k->id)->first();
            if($kk==null&& $kk2==null){
                $arr[]=$k;
            }
        }
     
        return response()->json(['thultt' => $arr]);
    }
    public function tg2($phong_id,$tg){
        $thu=Thu::get();
        $arr=[];
        foreach($thu as $k){
            $kk=Xeptkb::where('phonglt_id',$phong_id)->where('thoigianlt_id',$tg)->where('thult_id',$k->id)->first();
            $kk2=Xeptkb::where('phonglt2_id',$phong_id)->where('thoigianlt2_id',$tg)->where('thult2_id',$k->id)->first();
            if($kk==null&& $kk2==null){
                $arr[]=$k;
            }
        }
        return response()->json(['thult4tin' => $arr]);
    }
    public function mon($khoa,$ki){
        $monhoc=Monhoc::where('delete_tam','0');
        if($khoa != '0'){
            $monhoc->where('khoa_id',$khoa);
        }
        if($ki != '0'){
            $monhoc->where('kihoc', 'like', '%' . $ki . '%');
        }
        $monhoc= $monhoc->get();
        return response()->json(['monhoc'=>$monhoc]);
    }
    public function th($phong_id){
        $tg=Thoigianth::get();
        $arr=[];
        foreach($tg as $k){
            $kk=Xeptkb::where('phongth_id',$phong_id)->where('thult_id',$k->id)->first();
            if($kk==null){
                $arr[]=$k;
            }
        }
        return response()->json(['thuth' => $arr]);
    }
}
