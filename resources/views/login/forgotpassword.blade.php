<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quên mật khẩu</title>
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
</head>

<body>

  <div class="template-customer">
    @if(session('notify') == 'invalid')
    <div class="alert alert-danger">Không tìm thấy tài khoản!</div>
    @endif
    <h1 style="text-align: center">Lấy lại mật khẩu</h1>
    <p>Nhập tài khoản lấy lấy lại mật khẩu</p>
    <div class="row">
      <div class="col-md-7">
        <div class="wrapper-form">
          <form method='post' action="{{ Route('forgotpass') }}">
            @csrf
            <div class="form-group">
              <label>Email:<b id="req">*</b></label>
              <input type="email" class="input-control" name="email" required="">
            </div>
            @error('email')
            <div class="form-group">
              <span class="error">{{ $message }}</span>
            </div>
            @enderror


            <input type="submit" class="button" value="Lấy lại mật khẩu">

          </form>
          <p style="text-align:center">Nếu bạn muốn đăng nhập hãy ấn <a href="{{ Route('login') }}">tại đây</a></p>
        </div>
      </div>

    </div>
  </div>
</body>

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