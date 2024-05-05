@extends("layout")
@section("do-du-lieu-tu-view")

    <div class="col-md-12">
        <div class="col-md-12">
            <h2 style="text-align: center;color: #cc1e35;">Quản lý môn học</h2>
            <div style="margin-bottom:5px;">
                <a href="{{ Route('themmonhoc') }}" class="btn btn-primary">Thêm môn học</a>
            </div>
    
    <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center">Danh sách các môn học kì hiện tại</div>
        {{-- <div style="border: 1px;"></div> --}}
        <div class="panel-body">
            <table class="table table-bordered table-hover" >
                <tr >
                    <th>Mã</th>
                    <th style="text-align:center;" >Tên môn học</th>
                    <th style="text-align:center;" >Số lớp</th>
                    <th style="text-align:center;" >Số tín chỉ</th>
                    <th style="text-align:center;" >Số tiết lý thuyết</th>
                    <th style="text-align:center;" >Số tiết thực hành</th>
                    <th style="text-align:center;" >Khoa</th>
                    <th style="text-align:center;" >Kì học</th>
                    <th ></th>
                </tr>
                @foreach ($data as $row )
                <tr>
                   
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td style="text-align:right;" >{{ $row->quantity }}</td>
                    <td style="text-align:right;" >{{ $row->tin }}</td>
                    <td style="text-align:right;" >{{ $row->lythuyet }}</td>
                    <td style="text-align:right;" >{{ $row->thuchanh }}</td>
                    <td>{{ $row->khoa->name }}</td>
                    <td>{{ $row->kihoc }}</td>
                    <td style="text-align:center;">
                        <a href="{{Route('suamonhoc', ['id' => $row->id])}}">Sửa</a>&nbsp;
                        <a href="{{ Route('xoamonhoc', ['id' => $row->id]) }}" onclick="return window.confirm('Bạn có muốn xóa không?');">Xóa</a>
                    </td>
                    </td>
                    
                   
                </tr>
                @endforeach
                  
            </table>
        </div>
    </div>
</div>
<script>
    @if(session('done'))
        alert("{{ session('done') }}");
    @endif
    @if(session('them'))
        alert("{{ session('them') }}");
    @endif
    @if(session('sua'))
        alert("{{ session('sua') }}");
    @endif
</script>
@endsection