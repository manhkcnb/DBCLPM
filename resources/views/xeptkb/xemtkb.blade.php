@extends("layout")
@section("do-du-lieu-tu-view")

    <div class="col-md-12">
        <div class="col-md-12">
            <div style="margin-bottom:5px;">
                <a href="{{ Route('themtkb') }}" class="btn btn-primary">Thêm</a>
            </div>
    
    <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center">Danh sách các môn đã đăng kí thời khóa biểu</div>
        {{-- <div style="border: 1px;"></div> --}}
        <div class="panel-body">
            <table class="table table-bordered table-hover" >
                <tr >
                    <th>STT</th>
                    <th style="text-align:center;" >Tên môn học</th>
                    <th style="text-align:center;" >Lớp số</th>
                    <th style="text-align:center;" >Phòng học lý thuyết </th>
                    <th style="text-align:center;" >Phòng học thực hành </th>

                    <th ></th>
                </tr>
                @foreach ($data as $row )
                <tr>
                   
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->monhoc->name }}</td>
                    <td>{{ $row->stt }}</td>
                    <td>Phòng lý thuyết:
                        {{ $row->phonglt->name }} : {{$row->thoigianlt->name }} : {{ $row->thult->name }} <br>
                        @if($row->phonglt2!=null)
                        {{ $row->phonglt2?->name }} : {{$row->thoigianlt2?->name }} : {{ $row->thult2?->name }}
                        @endif
                    
                    </td>
                    @if ($row->phongth == null)
                    <td>Không có phòng học thực hành</td>
                    @else
                    <td>Phòng thực hành:{{ $row->phongth?->name }} : {{ $row->thoigianth?->thoigian }}</td>
                    @endif
                    <td style="text-align:center;">
                        <a href="{{Route('suatkb', ['id' => $row->id])}}">Sửa</a>&nbsp;
                        <a href="{{ Route('xoatkb', ['id' => $row->id]) }}" onclick="return window.confirm('Bạn có muốn xóa không?');">Xóa</a>
                    </td>
                    </td>
                    
                   
                </tr>
                @endforeach
                  
            </table>
        </div>
    </div>
</div>
@endsection