<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nhập mã </title>
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
</head>

<body>
  <div class="template-customer">
    @if(isset($notify)&&$notify == 'invalid')
    <div class="alert alert-danger">Mã code không đúng, vui lòng nhập lại.</div>
    @endif
    <h1 style="text-align: center">Lấy lại mật khẩu</h1>
    <p>Nhập mã gồm 6 kí tự được gửi vào email tài khoản</p>
    <div class="row" style="margin-top:50px;">
      <div class="col-md-6">
        <div class="wrapper-form">
          <form method='post' action="{{ Route('passwordnew') }}">
            @csrf
            <div class="form-group">
              <input type="hidden" name="email" value="{{$email}}">
              <label>Mã:<b id="req">*</b></label>
              <input type="text" class="input-control" name="code" minlength="6" maxlength="6" required>
            </div>
            @error('code')
            <div class="form-group">
              <span class="error">{{ $message }}</span>
            </div>
            @enderror

            <input type="submit" class="button" value="Submit">

          </form>
          <p style="text-align:center">Nếu bạn muốn đăng nhập hãy ấn <a href="{{ Route('login') }}">tại đây</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
 s
</html>
<script>
  // Sử dụng sự kiện DOMContentLoaded để đảm bảo tất cả các phần tử đã được tải
  document.addEventListener("DOMContentLoaded", function() {
      // Lấy phần tử input đầu tiên trong form
      var firstInput = document.querySelector('form input[type="email"]');

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