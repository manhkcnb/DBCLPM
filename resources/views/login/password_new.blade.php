<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nhập mật khẩu mới</title>
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
</head>

<body>
  <div class="template-customer">
    
    @if(isset($notify)&&$notify == 'invalid')
    <div class="alert alert-danger">Trùng với mật khẩu cũ, vui lòng điền mật khẩu mới hoặc đăng nhập <a href="{{ Route('login') }}">tại đây</a></div>
    @endif
    

    <div class="row" style="margin-top:50px;">
      <h2>Nhập mật khẩu mới</h2>
      <div class="col-md-6">
        <div class="wrapper-form">
          <form method='post' action="{{ Route('okpass') }}">
            @csrf
            <input type="hidden" name="email" value="{{$email}}">
            <div class="form-group">
              <label>Nhập mật khẩu mới ở đây:<b id="req">*</b></label>
              
              <input type="password" class="input-control" name="password" required  placeholder="Nhập mật khẩu mới ở đây" id="password-input">
              <input type="checkbox" onclick="togglePasswordVisibility()"> Hiển thị mật khẩu
            </div>
            @error('password')
            <div class="form-group">
              <span class="error">{{ $message }}</span>
            </div>
            @enderror
            <p>Vui lòng nhập mật khẩu mới gồm ít nhất 1 kí tự in hoa,1 kí tự thường và 1 kí tự đặc biệt</p>
            <input type="submit" class="button" value="Gửi">

          </form>
          <p style="text-align:center">Nếu bạn muốn đăng nhập hãy ấn <a href="{{ Route('login') }}">tại đây</a></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script>
  function togglePasswordVisibility() {
      var passwordInput = document.getElementById("password-input");
      if (passwordInput.type === "password") {
          passwordInput.type = "text";
      } else {
          passwordInput.type = "password";
      }
  }
</script>
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