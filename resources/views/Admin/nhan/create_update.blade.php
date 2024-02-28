@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-10">  
	    <div class="panel panel-primary">
	        <div class="panel-heading" style="text-align:center;">Thêm nhãn</div>
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
	                <div class="col-md-2">Tên nhãn:</div>
	                <div class="col-md-10">
	                 <input class="form-control" ></input>
	                </div>
	            </div>
	            <!-- end rows -->	
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-2">Mô tả:</div>
	                <div class="col-md-10">
	                	<input class="form-control" ></input>
	                </div>
	            </div>
	            <!-- end rows -->            
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                <div class="col-md-2"></div>
	                <div class="col-md-10">
	                    <input type="submit" value="Thêm nhãn" class="btn btn-primary">
	                </div>
	            </div>
	            <!-- end rows -->
	        </form>
	        </div>
	    </div>
	</div>
@endsection