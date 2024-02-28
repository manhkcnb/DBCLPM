@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-12">  
	    <div class="panel panel-primary">
	        <div class="panel-heading">Sửa mẫu</div>
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
	                <div class="col-md-1">Nội dung Email</div>
	                <div class="col-md-11">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" 
						>THÔNG BÁO MỚIBạn nào chưa ký thì chiều nay từ 3h đến 4h30 nếu có thời gian thì lên vp bộ môn tầng 9 nhà A2 ký nhé. Nếu không thì sáng mai từ 10h đến 11h nhé.
						Xem chi tiết
						Do cong tran đăng vào ngày 3:13 CH, thg 6 7 (ICT)
						Biểu trưng GoogleGoogle LLC 1600 Amphitheatre Parkway, Mountain View, CA 94043 USA
						Chúng tôi gửi email này đến bạn vì bạn đã cho biết là mình muốn nhận thông báo qua email từ Google Lớp học. Nếu không muốn nhận những email tương tự, bạn có thể huỷ đăng ký hoặc thay đổi chế độ cài đặt.
						</textarea>
	                </div>
	            </div>
	            <!-- end rows -->	
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-1">Nhãn</div>
	                <div class="col-md-11">
	                	<select>
	                		<option>Học Tập</option>
	                	</select>
	                </div>
	            </div>
	            <!-- end rows -->            
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-1"></div>
	                <div class="col-md-11">
	                    <input type="submit" value="Submit" class="btn btn-primary">
	                </div>
	            </div>
	            <!-- end rows -->
	        </form>
	        </div>
	    </div>
	</div>
@endsection