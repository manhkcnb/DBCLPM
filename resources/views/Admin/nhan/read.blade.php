@extends("admin.layout")
@section("do-du-lieu-tu-view")
<form method="post" action="{{url('backend/products/searchKey')}}">
    @csrf
    <div class="col-md-12" style="display:flex; margin-bottom: 10px;">
        <a href="{{ url('backend/nhan/create')}}" class="btn btn-primary ml-5">Thêm nhãn</a>
        <input type="name" class="form-control" name="key" placeholder="Nhập mẫu cần tìm kiếm">
        <button type="submit" ><i class="fa fa-search " style="width"></i></button>
    </div>
</form>
    <div class="col-md-12">
    
    <div class="panel panel-primary">
        <div class="panel-heading text-center">Quản lý nhãn</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" >
                <tr >
                    <th>STT</th>
                    <th style="text-align:center;" >Tên Nhãn</th>
                    <th style="text-align:center;" >Mô tả</th>
                    <th style="width: 70px;"></th>
                </tr>
                <tr>
                    <td>1</td>
                    
                    <td>Học Tập</td>
                    <td>Email về nội dung học tập</td>
                   <td style="text-align:center;">
                        <a href="{{url('backend/nhan/detail')}}">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    
                    <td>
                        Đơn hàng
                    </td>
                    <td>Email mô tả cách đơn hàng từ mạng xã hội</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                   
                    <td>Quảng cáo</td>
                    <td>Email mô tả các quảng cáo online</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                   
                   
                    <td>Cảnh báo</td>
                    <td>Đơn hàng miêu tả về nội dung cảnh báo đến bạn</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    
                    <td>Ngân hàng</td>
                    <td>Email miêu tả nội dung giao dịch của đơn hàng</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>    
                <tr>
                    <td>6</td>
                    
                    <td>Rác</td>
                    <td>Email miêu tả nội dung spam</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>        
            </table>
        </div>
    </div>
</div>
@endsection