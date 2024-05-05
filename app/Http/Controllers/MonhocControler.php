<?php

namespace App\Http\Controllers;

use App\Http\Requests\Themmonhoc;
use Illuminate\Http\Request;
use App\Models\Monhoc;
use App\Models\khoa;
use App\Models\Xeptkb;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class MonhocControler extends Controller
{   
    public function readd()
    {
        $data = Monhoc::with('khoa')->paginate(10);

        return response()->json($data);

        // return view('monhoc.xemmonhoc', ['data' => $data]);
    }
    public function read()
    {
        $data = Monhoc::with('khoa')->where('delete_tam',"=","0")->paginate(10);

        // return response()->json($data);

        return view('monhoc.xemmonhoc', ['data' => $data]);
    }
    public function create()
    {
        $data = khoa::all();
        return view('monhoc.create_update', ['data' => $data]);
    }
    public function createPost(Themmonhoc $request)
    {
        $name = $request->input('name');
        $quantity = $request->input('quantity');
        $tin = $request->input('tin');
        $thuchanh = $request->input('thuchanh');
        $lythuyet = $request->input('lythuyet');
        $khoa = $request->input('khoa');
        $ki= $request->input('ki');
        Monhoc::create(['name' => $name, 'quantity' => $quantity, 'tin' => $tin, 'thuchanh' => $thuchanh, 'lythuyet' => $lythuyet, 'khoa_id' => $khoa,'kihoc'=>$ki,'delete_tam'=>0]);
        return redirect()->route('monhoc')->with('them', 'Thêm môn học thành công.');
    }

    public function edit($id)
    {
        $data = khoa::all();
        $row = Monhoc::find($id);
        $const = Xeptkb::where('monhoc_id',$id)->count();
        return view('monhoc.update', ['data' => $data, 'row' => $row,'const'=>$const]);
    }
    public function editPost($id, Themmonhoc $request)
    {
        
        $monhoc = Monhoc::find($id);
        $const = Xeptkb::where('monhoc_id',$id)->count();
        if($const<= $request->input('quantity') ){
            $monhoc->update([
                'name' => $request->input('name'),
                'quantity' => $request->input('quantity'),
                'tin' => $request->input('tin'),
                'thuchanh' => $request->input('thuchanh'),
                'lythuyet' => $request->input('lythuyet'),
                'khoa_id' => $request->input('khoa')
            ]);
            return redirect()->route('monhoc')->with('sua', 'Sửa môn học thành công.');
        } else {
            return redirect()->back()->withErrors(['custom_error'=> 'Không thể sửa số lớp xuống dưới số lớp đã đăng ký trong thời khóa biểu.']);
        }
        
    }
    public function delete($id)
    {
        DB::transaction(function () use ($id) {
            $monhoc = Monhoc::find($id);
            if (!$monhoc) {
                redirect()->route('monhoc')->with('done', 'Không tồn tại môn học');;
            } 
            $k=Xeptkb::where('monhoc_id',$id)->first();
            if($k==null){
                $monhoc->update(['delete_tam'=>1]);

            }else{
                redirect()->route('monhoc')->with('done', 'Xóa môn học không thành công do đã được đăng kí thời khóa biểu');;
            }
           
           
        });
        return redirect()->route('monhoc')->with('done', 'Xóa thành công môn học');
    }
}
