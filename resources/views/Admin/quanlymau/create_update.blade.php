@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-12">  
	    <div class="panel panel-primary">
	        <div class="panel-heading">Thêm mẫu</div>
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
	                <div class="col-md-1">Nội dung Email</div>
	                <div class="col-md-11">
	                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
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
	                    <input type="submit" value="Thêm mẫu" class="btn btn-primary">
	                </div>
	            </div>
	            <!-- end rows -->
	        </form>
	        </div>
	    </div>
	</div>
@endsection