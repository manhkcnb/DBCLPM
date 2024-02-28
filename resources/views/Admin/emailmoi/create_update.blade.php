@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-12">  
	    <div class="panel panel-info">
	        <div class="panel-heading"></div>
	        <div class="panel-body">
	        <form method="post" action="{{ $action }}">
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
	                <div class="col-md-1">Trạng thái</div>
	                <div class="col-md-11">
	                	Đã gửi
	                </div>
	            </div>
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-1">Email nhận</div>
	                <div class="col-md-11">
	                	manhkcnb35@gmail.com
	                </div>
	            </div>
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-1">Tiêu đề</div>
	                <div class="col-md-11">
	                	Học tập
	                </div>
	            </div>
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-1">Nội dung Email</div>
	                <div class="col-md-11">
	                 <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea> -->
	                 tôi muốn chia sẻ kiến thức của tôi dành cho bạn , cơ những kiến thức cực kì độc đáo
	                </div>
	            </div>
	            <!-- end rows -->	
	            <!-- rows -->
	            
	            <!-- end rows -->            
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-1"></div>
	                <div class="col-md-11">
	                    <input type="submit" value="Gửi lại" class="btn btn-primary">
	                    <input type="submit" value="Xác nhận" class="btn btn-primary">
	                </div>
	            </div>
	            <!-- end rows -->
	        </form>
	        </div>
	    </div>
	</div>
@endsection