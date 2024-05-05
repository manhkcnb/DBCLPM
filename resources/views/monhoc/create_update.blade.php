@extends("layout")
@section("do-du-lieu-tu-view")
<div class="col-md-6" style="margin-left:20%">
	{{-- <h2 style="text-align: center;color: #cc1e35;">Thêm môn học</h2> --}}
	<div class="panel panel-primary">
		<div class="panel-heading" style="text-align: center">Thêm môn học</div>
		<div class="panel-body">
			<form method="post" action="{{ Route('themmonhocpost') }}">

				@csrf
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Tên</div>
					<div class="col-md-8">
						<input name="name" type="text" class="form-control" required />
						@error('name')
						<div class="form-group">
							<span class="error">{{ $message }}</span>
						</div>
						@enderror
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Số lượng</div>
					<div class="col-md-8">
						<input name="quantity" type="text" class="form-control" required />
						@error('quantity')
						<div class="form-group">
							<span class="error">{{ $message }}</span>
						</div>
						@enderror
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Số tín chỉ</div>
					<div class="col-md-8">
						<select name="tin" class="form-control">
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							
						</select>
						@error('tin')
						<div class="form-group">
							<span class="error">{{ $message }}</span>
						</div>
						@enderror
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Số tiết lý thuyết</div>
					<div class="col-md-8">
						<input name="lythuyet" type="text" class="form-control" required />
						@error('lythuyet')
						<div class="form-group">
							<span class="error">{{ $message }}</span>
						</div>
						@enderror
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Số tiết thực hành</div>
					<div class="col-md-8">
						<input name="thuchanh" type="text" class="form-control" required />
						@error('thuchanh')
						<div class="form-group">
							<span class="error">{{ $message }}</span>
						</div>
						@enderror
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Khoa</div>
					<div class="col-md-8">
						<select name="khoa" class="form-control">
							@foreach ( $data as $rows )
							<option value="{{ $rows->id }}">{{ $rows->name }}</option>
							@endforeach

						</select>
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Kì học</div>
					<div class="col-md-8">
						<select name="ki" class="form-control">
							
							<option value="Kì 1">Kì 1</option>
							<option value="Kì 2">Kì 2</option>
							<option value="Kì 3">Kì 3</option>
							<option value="Kì 4">Kì 4</option>
							
						</select>
					
					</div>
				</div>

				<div class="row" style="margin-top:20px;">
					<div class="col-md-8"></div>
					<div class="col-md-2">
						<input type="submit" value="Xác nhận" class="btn btn-primary">
					</div>
				</div>
				<!-- end rows -->
			</form>
		</div>
	</div>
</div>
<script>
    // Sử dụng sự kiện DOMContentLoaded để đảm bảo tất cả các phần tử đã được tải
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy phần tử input đầu tiên trong form
        var firstInput = document.querySelector('form input[type="text"]');

        // Nếu có phần tử input, thực hiện focus vào nó
        if (firstInput) {
            firstInput.focus();
        }
    });
</script>
@endsection