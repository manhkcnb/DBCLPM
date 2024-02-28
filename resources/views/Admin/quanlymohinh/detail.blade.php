@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-10">  
	    <div class="panel panel-primary">
	        <div class="panel-heading" style="text-align:center">Chi tiết mô hình</div>
	        <div class="panel-body row">
	        	<div class="col-md-5 ">
		            <style>
		            	.ck-editor__editable{
		            		max-height: 200px;
		            		min-height: 200px;
		            		overflow: scroll;
		            	}
		            </style>
		            <table class="table table-bordered table-hover" style="width: 85%; margin-left: 15px; margin-top:55px;">
		            	<tr>
		            		<th >ID</th>
		            		<td >{{$data->id}}</td>
		            	</tr>
		            	<tr>
		            		<th >Đường dẫn</th>
		            		<td >{{$data->duongDan}}</td>
		            	</tr>
		            	<tr>
		            		<th >Ngày huấn luyện:</th>
		            		<td >{{$data->ngayHuanLuyen}}</td>
		            	</tr>
		            	<tr>
		            		<th >Accuracy</th>
		            		<td >{{$data->accuracy}}</td>
		            	</tr>
		            	<tr>
		            		<th >Precision</th>
		            		<td >{{$data->precision}}</td>
		            	</tr>
		            	<tr>
		            		<th >Recall:</th>
		            		<td >{{$data->recall}}</td>
		            	</tr>
		            	<tr>
		            		<th >F1_Score</th>
		            		<td >{{$data->f1_score}}</td>
		            	</tr>
		            	<tr>
		            		<th >Trạng thái</th>
		            		<td >{{$data->trangThai}}</td>
		            	</tr>
		            </table>
		            <div class="col-md-12">
	                	@if($data->trangThai!="Sử dụng")
	                    <a href="{{url('backend/quanlymohinh/use/'.$data->id)}}" class="btn btn-primary">Sử dụng mô hình</a>
	                    <a href="{{url('backend/quanlymohinh/delete/'.$data->id)}}" onclick="return window.confirm('Are you sure?');" class="btn btn-primary">Xóa</a>
	                    @endif
	                    
	                </div>
			    </div>
			    <div class="col-md-7">
			    	<h3>Số lượng mẫu:{{$data->soLuongMau}}</h3>
			    	<table class="table table-bordered table-hover" >
			    		<tr>
			    			<th>ID</th>
			    			<th>Model ID</th>
			    			<th>Email ID</th>
			    		</tr>
			    		@foreach($data1 as $row)
			    		<tr>	
			    			<td>{{$row->id}}</td>
			    			<td>{{$row->id_moHinh}}</td>
			    			<td>{{$row->id_mau}}</td>
			    		</tr>
			    		@endforeach
			    	</table>
			    	{{$data1->links()}}
			    </div>
	        </div>
	    </div>
	</div>

@endsection