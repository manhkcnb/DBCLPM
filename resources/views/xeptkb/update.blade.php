@extends('layout')
@section('do-du-lieu-tu-view')
<div class="col-md-8" style="margin-left:10%">
    <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center">Thêm môn học mới cho thời khóa biểu</div>
        <div class="panel-body">
            <form method="post" action="{{ Route('suatkbPost',['id' => $row->id]) }}">
                @csrf
                
                
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tên môn học <b>*</b></div>
                    <div class="col-md-8">
                        {{-- <select id="monhoc" name="monhoc" class="form-control" style="width:40%">
                            <option value=""></option>
                            @foreach ($monhoc as $rows)
                            <option value="{{ $rows->id }}" thuchanh="{{ $rows->thuchanh }}" tin="{{ $rows->tin }}">{{
                                $rows->name }}
                            </option>
                            @endforeach
                        </select> --}}
						<input  class="form-control" value="{{ $row->monhoc->name }}"  readonly>
						<input name='monhoc' type="hidden" class="form-control" value="{{ $row->monhoc->id }}"  readonly>
                       
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Lớp thứ <b>*</b></div>
                    <div class="col-md-8">
                        <input name='stt' class="form-control" value="{{ $row->stt }}"  readonly>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Phòng lý thuyết <b>*</b></div>
                    <div class="col-md-8">
                        <select name="phonglt" class="form-control" >
                            <option value=""></option>
                            @foreach ($phonglt as $rows)
                            <option value="{{ $rows->id }}" @if ($rows->id == $row->phonglt_id) selected @endif>{{ $rows->name }}</option>
                            @endforeach

                        </select>
                        @error('phonglt')
                        <div class="form-group">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Thời gian <b>*</b></div>
                    <div class="col-md-8">
                        <select name="thoigian" class="form-control" >
                            <option value=""></option>
                            @foreach ($thoigian as $rows)
                            <option value="{{ $rows->id }}" @if ($rows->id == $row->thoigianlt_id) selected @endif>{{ $rows->name }}</option>
                            @endforeach

                        </select>
                        @error('thoigian')
                        <div class="form-group">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Thứ <b>*</b></div>
                    <div class="col-md-8">
						
                        <select name="thult" class="form-control">
							@foreach ($thult as $rows)
							
                            <option value="{{ $rows->id }}"  @if ((int)$rows->id == (int)$row->thult_id) selected @endif> {{ $rows->name }}</option>
							@endforeach
                        </select>
                        @error('thult')
                        <div class="form-group">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
				{{-- @dump($row->monhoc->tin) --}}
				@if($row->monhoc->tin == 3)
					
				
                <div  style="margin-top:5px;display: display: {{ intval($row->monhoc->tin) == 3 ? 'block' : 'none' }}">
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">Phòng lý thuyết buổi tối <b>*</b></div>
                        <div class="col-md-8">
                            <select name="phongltt" class="form-control" >
                                <option value=""></option>
                                @foreach ($phonglt as $rows)
                                <option value="{{ $rows->id }}"  @if ($rows->id == $row->phonglt2_id) selected @endif >{{ $rows->name }}</option>
                                @endforeach

                            </select>
                            @error('phongltt')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">Thời gian <b>*</b></div>
                        <div class="col-md-8">
                            <select name="thoigiant" class="form-control" >
                                <option value=""></option>
                                @foreach ($tg1 as $rows)
                                <option value="{{ $rows->id }}"  @if ($rows->id == $row->thoigianlt2_id) selected @endif>{{ $rows->name }}</option>
                                @endforeach

                            </select>
                            @error('thoigiant')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">Thứ <b>*</b></div>
                        <div class="col-md-8">
                            <select name="thultt" class="form-control" >
                                @foreach ($thult2 as $rows)
                                <option value="{{ $rows->id }}"  @if ($rows->id == $row->thult2_id) selected @endif>{{ $rows->name }}</option>
                                @endforeach
                            </select>
                            @error('thultt')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
				@endif
				@if($row->monhoc->tin == 4)
				{{-- @dump($row->monhoc->tin) --}}
                <div  style=" display: {{ intval($row->monhoc->tin) == 4 ? 'block' : 'none' }}">

                    <div class="row" style="margin-top:20px; ">
                        <div class="col-md-2">Phòng lý thuyết buổi 2 <b>*</b></div>
                        <div class="col-md-8">
                            <select name="phonglt4tin" class="form-control" >
                                <option value=""></option>
                                @foreach ($phonglt as $rows)
                                <option value="{{ $rows->id }}"  @if ($rows->id == $row->phonglt2_id) selected @endif >{{ $rows->name }}</option>
                                @endforeach

                            </select>
                            @error('phonglt4tin')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">Thời gian <b>*</b></div>
                        <div class="col-md-8">
                            <select name="thoigian4tin" class="form-control" >
                                <option value=""></option>
                                @foreach ($thoigian as $rows)
                                <option value="{{ $rows->id }}"  @if ($rows->id == $row->thoigianlt2_id) selected @endif >{{ $rows->name }}</option>
                                @endforeach

                            </select>
                            @error('thoigian4tin')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">Thứ <b>*</b></div>
                        <div class="col-md-8">
                            <select name="thult4tin" class="form-control" >
                                @foreach ($thult2 as $rows)
                                <option value="{{ $rows->id }}"  @if ($rows->id == $row->thult2_id) selected @endif>{{ $rows->name }}</option>
                                @endforeach
                            </select>
                            @error('thult4tin')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
				@endif
                <div  style="display: {{ $row->phongth_id ? 'block' : 'none' }}">
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">Phòng thực hành <b>*</b></div>
                        <div class="col-md-8">
                            <select name="phongth" class="form-control" >
                                <option></option>
                                @foreach ($phongth as $rows)
                                <option value="{{ $rows->id }}" @if ($rows->id == $row->phongth_id) selected @endif>{{ $rows->name }}</option>
                                @endforeach

                            </select>
                            @error('phongth')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="row" style="margin-top:20px; ">
                        <div class="col-md-2">Thời gian thực hành <b>*</b></div>
                        <div class="col-md-8">
                            <select name="thuth" class="form-control" >
                                <option></option>
                                @foreach ($thoigianth as $rows)
                                <option value="{{ $rows->id }}" @if ($rows->id == $row->thuth_id) selected @endif>{{ $rows->thoigian }}</option>
                                @endforeach

                            </select>
                            @error('thuth')
                            <div class="form-group">
                                <span class="error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-9"></div>
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
    $(document).ready(function() {
        $('select[name="khoa"], select[name="ki"]').on('change', function() {
                var phonglt_id = $('select[name="khoa"]').val();
                if(phonglt_id==''){
                     phonglt_id =0;
                }
                console.log(phonglt_id);
                var thoigian_id = $('select[name="ki"]').val();
                if(thoigian_id==''){
                    thoigian_id =0;
                }
                console.log(thoigian_id);
                if (true) {
                    $.ajax({
                        url: '/xeptkb/public/getmon/' + phonglt_id + '/' +
                        thoigian_id, // Đặt URL của bạn ở đây
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="monhoc"]').empty();
                            $('select[name="monhoc"]').append('<option value=""></option>');
                            $.each(data.monhoc, function(index, item) {
                                $('select[name="monhoc"]').append('<option value="' + item.id + '" thuchanh="' + item.thuchanh + '" tin="' + item.tin + '">' + item.name + '</option>');
                            });
                            console.log(data.monhoc);
                           
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
            $('select[name="monhoc"]').on('change', function() {
                var monhoc_id = $(this).val();
                if (monhoc_id) {
                    $.ajax({
                        url: '/xeptkb/public/sttlop/' + monhoc_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="stt"]').empty();
                            $.each(data.soluonglop, function(index, value) {
                                $('select[name="stt"]').append('<option value="' +
                                    value + '">' + value + '</option>');
                            });
                            console.log(data);
                        }
                    });
                } else {
                    $('select[name="stt"]').empty();
                }
            });
            $('select[name="phonglt"], select[name="thoigian"],select[name="phonglt4tin"],select[name="thoigian4tin"],select[name="thult4tin"]').on('change', function() {
                var phonglt_id = $('select[name="phonglt"]').val();
                var thoigian_id = $('select[name="thoigian"]').val();
                var phonglt_id0 = $('select[name="phonglt4tin"]').val();
                var thoigian_id0 = $('select[name="thoigian4tin"]').val();
                var thu_id0 = $('select[name="thult4tin"]').val();
                if (phonglt_id && thoigian_id) {
                    $.ajax({
                        url: '/xeptkb/public/getday/' + phonglt_id + '/' +
                        thoigian_id, // Đặt URL của bạn ở đây
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="thult"]').empty();
                            $.each(data.thult, function(index, item) {
                                if (phonglt_id != phonglt_id0 || thoigian_id != thoigian_id0 || thu_id0 != item.id) {
                                    $('select[name="thult"]').append('<option value="' + item.id + '">' + item.name + '</option>');
                                }
                            });
                            console.log(data);
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
            $('select[name="phonglt4tin"], select[name="thoigian4tin"],select[name="phonglt"], select[name="thoigian"],select[name="thult"]').on('change', function() {
                var phonglt_id = $('select[name="phonglt4tin"]').val();
                var thoigian_id = $('select[name="thoigian4tin"]').val();
                var phonglt_id0 = $('select[name="phonglt"]').val();
                var thoigian_id0 = $('select[name="thoigian"]').val();
                var thu_id0 = $('select[name="thult"]').val();
                if (phonglt_id && thoigian_id) {
                    $.ajax({
                        url: '/xeptkb/public/getday2/' + phonglt_id + '/' +
                        thoigian_id, // Đặt URL của bạn ở đây
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="thult4tin"]').empty();
                            $.each(data.thult4tin, function(index, item) {
                                if (phonglt_id != phonglt_id0 || thoigian_id != thoigian_id0 || thu_id0 != item.id) {
                                    $('select[name="thult4tin"]').append('<option value="' + item.id + '">' + item.name + '</option>');
                                }
                            });
                            console.log(data);
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
            $('select[name="phongltt"], select[name="thoigiant"]').on('change', function() {
                var phonglt_id = $('select[name="phongltt"]').val();
                var thoigian_id = $('select[name="thoigiant"]').val();
                if (phonglt_id && thoigian_id) {
                    $.ajax({
                        url: '/xeptkb/public/getday1/' + phonglt_id + '/' +
                        thoigian_id, // Đặt URL của bạn ở đây
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="thultt"]').empty();
                            $.each(data.thultt, function(index, item) {
                                $('select[name="thultt"]').append('<option value="' +
                                    item.id + '">' + item.name + '</option>');
                            });
                            console.log(data);
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
            $('select[name="phongth"]').on('change', function() {
               
                var th_id = $('select[name="phongth"]').val();
                console.log(th_id);
                if (th_id) {
                    $.ajax({
                        url: '/xeptkb/public/getp/' + th_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="thuth"]').empty();
                            $.each(data.thuth, function(index, item) {
                                $('select[name="thuth"]').append('<option value="' +
                                    item.id + '">' + item.thoigian + '</option>');
                            });
                            console.log(data);
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
           
        });
</script>
<script>
    document.getElementById('monhoc').addEventListener('change', function() {
            // Lấy giá trị của thuộc tính data-has-thuchanh của option được chọn
            var hasThuchanh = this.options[this.selectedIndex].getAttribute('thuchanh');
           
            var tin = this.options[this.selectedIndex].getAttribute('tin');
            console.log(tin);
            // Nếu môn học có thực hành
            if (hasThuchanh > 0) {
                // Hiển thị phần chọn phòng thực hành
                document.getElementById('phongthuchanh').style.display = 'block';
            } else {
                // Ẩn phần chọn phòng thực hành
                document.getElementById('phongthuchanh').style.display = 'none';
            }
            if (tin == 3) {
                // Hiển thị phần chọn phòng thực hành
                document.getElementById('3tin').style.display = 'block';
            } else {
                // Ẩn phần chọn phòng thực hành
                document.getElementById('3tin').style.display = 'none';
            }
            if (tin == 4) {
                // Hiển thị phần chọn phòng thực hành
                document.getElementById('4tin').style.display = 'block';
            } else {
                // Ẩn phần chọn phòng thực hành
                document.getElementById('4tin').style.display = 'none';
            }
        });
</script>
<script>
    // Sử dụng sự kiện DOMContentLoaded để đảm bảo tất cả các phần tử đã được tải
        document.addEventListener("DOMContentLoaded", function() {
            // Lấy phần tử input đầu tiên trong form
            var firstInput = document.querySelector('form select[name="khoa"]');

            // Nếu có phần tử input, thực hiện focus vào nó
            if (firstInput) {
                firstInput.focus();
            }
        });
</script>
@endsection