@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-12">  
	    <div class="panel panel-success">
	        <div class="panel-heading" style="text-align:center">Chi tiết email</div>
	        <div class="panel-body">
	        <form method="post" >
	        	<!-- rows -->
	          
	            <!-- end rows -->
	            <!-- rows -->
	            <style>
	            	.ck-editor__editable{
	            		max-height: 200px;
	            		min-height: 200px;
	            		overflow: scroll;
	            	}
	            </style>
	             <div class="row" style="margin-top:5px;">
	                <div class="col-md-2">Email gửi:</div>
	                <div class="col-md-10">Nguyễn Thị A</div>
	                <div class="col-md-2">Ngày nhận:</div>
	                <div class="col-md-10"> 15/7/2023</div>
	            </div>
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-2">Nội dung Email</div>
	                <div class="col-md-10">
						<div class="overflow-auto" style="height: 100px;">
					        <!-- Đoạn văn bản dài ở đây -->
					        THÔNG BÁO MỚI
					        Bạn nào chưa ký thì chiều nay từ 3h đến 4h30 nếu có thời gian thì lên vp bộ môn tầng 9 nhà A2 ký nhé. Nếu không thì sáng mai từ 10h đến 11h nhé.
					        Xem chi tiết
					        Do cong tran đăng vào ngày 3:13 CH, thg 6 7 (ICT)
					        Biểu trưng GoogleGoogle LLC 1600 Amphitheatre Parkway, Mountain View, CA 94043 USA
					        Chúng tôi gửi email này đến bạn vì bạn đã cho biết là mình muốn nhận thông báo qua email từ Google Lớp học. Nếu không muốn nhận những email tương tự, bạn có thể huỷ đăng ký hoặc thay đổi chế độ cài đặt.
					        <!-- Kết thúc đoạn văn bản dài -->
					      </div>
	                </div>
	            </div>
	            <!-- end rows -->	
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-2">Chủ đề dự đoán</div>
	                <div class="col-md-10">
	                	<p>Học Tập</p>
	                </div>
	            </div>
	            <!-- end rows -->            
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-1"></div>
	                <div class="col-md-11">
	                   <!--  <input type="submit" value="Sửa" class="btn btn-primary">
	                    <input type="submit" value="Xóa" class="btn btn-primary"> -->
	                     <input type="submit" value="Đã đọc" class="btn btn-primary">
	                     <input type="submit" value="Đánh dấu chưa đọc" class="btn btn-primary">
	                     <input type="submit" value="Reply" class="btn btn-primary">
	                     <input type="submit" value="Xóa" class="btn btn-primary">


	                </div>
	            </div>
	            <!-- end rows -->
	        </form>
	        </div>
	    </div>
	</div>
@endsection