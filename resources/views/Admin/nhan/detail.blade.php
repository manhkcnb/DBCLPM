@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-6">  
	    <div class="panel panel-primary">
	        <div class="panel-heading" style="text-align:center">Chi tiết nhãn</div>
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
	                <div class="col-md-10">Tên Nhãn: Học Tập</div>
	                
	            </div>
	            <!-- end rows -->	
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-10">Mô tả    :  Email về nội dung học tập </div>
	               
	            </div>
	            <!-- end rows -->            
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                
	                <div class="col-md-6">
	                   <a href="{{ url('backend/nhan/update')}}" class="btn btn-primary ml-5">Sửa</a>
	                   <a href="{{ url('backend/nhan/deleta')}}" class="btn btn-primary ml-5">Xóa</a>
	                     


	                </div>
	            </div>
	            <!-- end rows -->
	        </form>
	        </div>
	    </div>
	</div>
@endsection