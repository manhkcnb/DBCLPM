@extends("admin.layout")
@section("do-du-lieu-tu-view")
@php
	use Illuminate\Support\Str;
@endphp
	<div class="col-md-8">  
	    <div class="panel panel-primary">
	        <div class="panel-heading" style="text-align:center;">Thêm mô hình</div>
	        <div class="panel-body">
	        <form method="post" action="{{$action}}">
	        	@csrf
	        	<div class="row" style="margin-top:5px;">
	                <div class="col-md-1"></div>
	                <div class="col-md-11">
	                    <input type="submit" value="Train" class="btn btn-primary">
	                </div>
	            </div>
	            <div class="row" style="margin-top:20px;">
	                <div class="col-md-6">Thuật toán:
	                	<select name="thuattoan"  >
	                		@foreach($thuattoan as $row)
	                		<option value="{{$row->id}}">{{$row->ten}}</option>
	                		@endforeach
	                	</select>
	                </div>
	            </div>
	            <div>
	            	Bảng mẫu train:
	            	<table class="table table-bordered table-hover">
	            		<tr>
	            			<th>ID</th>
	            			<th>Nội dung</th>
	            			<th>Nhãn</th>
	            			<th>
	            				<input type="checkbox"  id="mauall" value=".">
	            			</th>
	            		</tr>
	            		@foreach($mau as $row)
	            		<tr>
	            			<td>{{$row->id}}</td>
	            			<td>{{Str::limit($row->noiDungMau, 100)}}</td>
	            			<td>{{$row->tenNhan}}</td>
	            			<td>
	            				<input type="checkbox" name="mauid[]" value="{{$row->id}}" id="mauid">
	            			</td>
	            		</tr>
	            		@endforeach
	            	</table>
	            	
	            </div>
	            
	            
	            <!-- end rows -->
	        </form>

	        </div>
	    </div>
	</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const mauAllCheckbox = document.getElementById('mauall');
        const mauIdCheckboxes = document.querySelectorAll('input[id="mauid"]');
        mauAllCheckbox.addEventListener('change', function () {
            mauIdCheckboxes.forEach(function (checkbox) {
                checkbox.checked = mauAllCheckbox.checked;
            });
        });
    });
</script>
@endsection