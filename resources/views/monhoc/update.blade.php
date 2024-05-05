<!-- rows -->
@extends("layout")
@section("do-du-lieu-tu-view")
@if ($errors->has('custom_error'))
<div class="alert alert-danger">
    {{ $errors->first('custom_error') }}
</div>
@endif
<div class="col-md-6" style="margin-left:20%">
    <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center">Sửa môn học</div>
        <div class="panel-body">
            <form method="post" action="{{ Route('suammonhocpost',['id' => $row->id]) }}">
                @csrf
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tên</div>
                    <div class="col-md-8">
                        <input name="name" type="text" class="form-control" value="{{ $row->name }}" required  />
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
                        <input name="quantity" type="text" class="form-control" value="{{ $row->quantity }}" required />
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
						@if($const>0) 
						<input name="tin" type="text" class="form-control" value="{{ $row->tin }}" required readonly />
						@else
                        <select name="tin" id="example" class="form-control" >
							<option value="1" {{ $row->tin == 1 ? 'selected' : '' }}>1</option>
							<option value="2" {{ $row->tin == 2 ? 'selected' : '' }}>2</option>
							<option value="3" {{ $row->tin == 3 ? 'selected' : '' }}>3</option>
							<option value="4" {{ $row->tin == 4 ? 'selected' : '' }}>4</option>
                        </select>
						@endif
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
                        <input name="lythuyet" type="text" class="form-control" value="{{ $row->lythuyet }}" required @if($const>0) readonly @endif/>
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
                        <input name="thuchanh" type="text" class="form-control" value="{{ $row->thuchanh }}" required @if($const>0) readonly @endif/>
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
						@if($const>0) 
						<input name="khoa" type="text" class="form-control" value="{{ $row->khoa->name }}" required readonly />
						@else
                        <select name="khoa" class="form-control" >
                            @foreach ( $data as $rows )
                            <option value="{{ $rows->id }}" @if($rows->id==$row->khoa_id) selected @endif>{{ $rows->name
								}}</option>
                            @endforeach

                        </select>
						@endif
                        @error('khoa')
                        <div class="form-group">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Kì học</div>
                    <div class="col-md-8">
						@if($const>0) 
						<input name="ki" type="text" class="form-control" value="{{ $row->kihoc }}" required readonly />
						@else
                        <select name="ki" class="form-control" >

                            <option value="Kì 1" @if($row->kihoc=="Kì 1") selected @endif>Kì 1</option>
                            <option value="Kì 2" @if($row->kihoc=="Kì 2") selected @endif>Kì 2</option>
                            <option value="Kì 3" @if($row->kihoc=="Kì 3") selected @endif>Kì 3</option>
                            <option value="Kì 4" @if($row->kihoc=="Kì 4") selected @endif>Kì 4</option>

                        </select>
						@endif
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
        var initialValue = $('#example').val();

        // Ngăn chặn việc thay đổi giá trị của phần tử select
        $('#example').on('change', function() {
            $(this).val(initialValue); // Khôi phục giá trị ban đầu
        });
    });

</script>
@endsection
