@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-12">  
	    <div class="panel panel-primary">
	        <div class="panel-heading" style="text-align:center;">Sửa mẫu</div>
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
	                <div class="col-md-2">Tên nhãn:</div>
	                <div class="col-md-10">
	                 <input class="form-control" value="Học tập" ></input>
	                </div>
	            </div>
	            <!-- end rows -->	
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-2">Mô tả:</div>
	                <div class="col-md-10">
	                	<input class="form-control" value="Email về nội dung học tập" ></input>
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