@extends("admin.layout")
@section("do-du-lieu-tu-view")
<form method="post" action="{{url('backend/quanlymohinh/searchKey')}}">
    @csrf
    <div class="col-md-12" style="display:flex; margin-bottom: 10px;">
        <a href="{{ url('backend/quanlymohinh/create')}}" class="btn btn-primary ml-5">Thêm mô hình</a>
        <input type="name" class="form-control" name="key" placeholder="Nhập mô hình cần tìm kiếm">
        <button type="submit" ><i class="fa fa-search " style="width"></i></button>
    </div>
</form>
    @if(isset($key))
        <h2 style="margin-left: 15px;">Tìm kiếm: {{$key}}</h2>
    @endif
    <div class="col-md-12">
    
    <div class="panel panel-primary">
        <div class="panel-heading text-center">Quản lý mô hình</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" >
                <tr >
                    <th>Id</th>
                    <th style="text-align:center;" >Đường dẫn</th>
                    <th style="text-align:center;" >Ngày tạo</th>
                    <th>F1_score</th>
                    <th>Số lượng mẫu train</th>
                    <th>Thuật toán sử dụng</th>
                    <th>Trạng thái</th>
                    <th style="width: 70px;"></th>
                </tr>
                @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->duongDan}}</td>
                    <td>{{$row->ngayHuanLuyen}}</td>
                    <td>{{$row->f1_score}}</td>
                    <td>{{$row->soLuongMau}}</td>
                    @php
                    $k = ""; 
                    @endphp
                    @if($row->idThuatToan == "1")
                        @php
                        $k = "Fasttext";
                        @endphp
                    @elseif($row->idThuatToan == "2")
                        @php
                        $k = "Navie bayes";
                        @endphp
                    @elseif($row->idThuatToan == "3")
                        @php
                        $k = "Logistic Regression";
                        @endphp
                    @else
                        @php
                        $k = "Support Vector Machine";
                        @endphp
                    @endif
                    <td>{{$k}}</td>
                    <td class="{{ $row->trangThai === 'Sử dụng' ? 'text-danger' : '' }}">{{$row->trangThai}}</td>
                    <td style="text-align:center;">
                        <a href="{{url('backend/quanlymohinh/detail/'.$row->id)}}">Chi tiết</a>&nbsp;
                    </td>
                </tr>
                @endforeach  
            </table>

        </div>
    </div>
</div>
@endsection