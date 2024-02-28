@extends("admin.layout")
@section("do-du-lieu-tu-view")
<form method="post" action="{{url('backend/quanlymau/searchKey')}}">
    @csrf
    <div class="col-md-12" style="display:flex; margin-bottom: 10px;">
        <a href="{{ url('backend/quanlymau/create')}}" class="btn btn-primary ml-5">Thêm mẫu</a>
        <input type="name" class="form-control" name="key" placeholder="Nhập mẫu cần tìm kiếm">
        <button type="submit" ><i class="fa fa-search " style="width"></i></button>
    </div>
</form>
    <div class="col-md-12">
    
    <div class="panel panel-primary">
        <div class="panel-heading text-center">Quản lý mẫu</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover" >
                <tr >
                    <th>STT</th>
                    <th style="text-align:center;" >Nội dung</th>
                    <th style="text-align:center;" >Nội dung sạch</th>
                    <th>Người thêm</th>
                    <th>Nhãn</th>
                    <th style="width: 70px;"></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Google <noreply@google.com>
                    08:09 Th 6, 4 thg 8
                    đến tôi 
                    Mã xác minh Google  
                    Kính gửi người dùng Google!...
                    </td>
                    <td>Google <noreply@google.com>
                    08:09 Th 6, 4 thg 8
                    đến tôi 
                    Mã xác minh Google  
                    Kính gửi người dùng Google!...</td>
                    <td>Nguyễn Văn M</td>
                    <td>Cảnh báo</td>
                   <td style="text-align:center;">
                        <a href="{{url('backend/quanlymau/detail')}}">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>tới đăng nhập trên Apple iPhone
                        manhkcnb35@gmail.com
                    Chúng tôi phát hiện thấy có một yêu cầu đăng nhập mới vào Tài khoản....
                    </td>
                    <td>tới đăng nhập trên Apple iPhone
                        manhkcnb35@gmail.com
                    Chúng tôi phát hiện thấy có một yêu cầu đăng nhập mới vào Tài khoản... 
                    </td>
                    <td>
                        Nguyễn Văn A
                    </td>
                    <td>Cảnh báo</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>[QC] ĐỂ TỐI ƯU HÓA TÍNH NĂNG & GIA TĂNG BẢO MẬT – HÃY CHUYỂN ĐỔI THẺ CHIP NGAY HÔM NAY!Hộp thư đếnViet ...
                    </td>
                    <td>
                        [QC] ĐỂ TỐI ƯU HÓA TÍNH NĂNG & GIA TĂNG BẢO MẬT – HÃY CHUYỂN ĐỔI THẺ CHIP NGAY HÔM NAY!Hộp thư đến
                        Viet ...
                    </td>
                    <td>Nguyễn Văn A</td>
                    <td>Ngân Hàng</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        Be - Nền tảng đa dịch vụ
                        DEAL CHỒNG DEAL
                        DEAL CHỒNG DEAL ĐÃ CÓ TRÊN BEFOOD
                        🤔 Đặt món nhưng chỉ áp được ưu ...
                    </td>
                    <td>
                        Be - Nền tảng đa dịch vụ
                        DEAL CHỒNG DEAL
                        DEAL CHỒNG DEAL ĐÃ CÓ TRÊN BEFOOD
                        🤔 Đặt món nhưng chỉ áp được ưu ...
                    </td>
                    <td>Nguyễn Văn C</td>
                    <td>Đơn Hàng</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        Biểu trưng của lớp học
                        ''  Cài đặt thông báo
                        DB
                        THÔNG BÁO MỚI
                        Bạn nào chưa ký thì chiều nay từ 3h đến 4h30 nếu có ...
                    </td>
                    <td>
                        Biểu trưng của lớp học
                        ''  Cài đặt thông báo
                        DBPT_8  ''
                        THÔNG BÁO MỚI
                        Bạn nào chưa ký thì chiều nay từ 3h đến 4h30 nếu có ...
                    </td>
                    <td>Nguyễn Văn D</td>
                    <td>Học Tập</td>
                   <td style="text-align:center;">
                        <a href="">Chi tiết</a>&nbsp;
                        
                    </td>
                </tr>      
            </table>
        </div>
    </div>
</div>
@endsection