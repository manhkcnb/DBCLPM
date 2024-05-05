<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
</head>

<body>
	<div class="container" style="margin-top:40px;">
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3">
				@if(session('notify') == 'invalid')
				<div class="alert alert-danger">Sai tài khoản hoặc mật khẩu</div>
				@endif
				<div class="panel panel-primary">
					<div class="panel-heading">Đăng nhập</div>
					<div class="panel-body">
						<form method="post" action="{{ route('loginPost') }}">
							<!-- muốn submit được form trong laravel thì phải có thẻ sau -->
							@csrf
							<div class="row" style="margin-top:5px;">
								<div class="col-md-2">Tài khoản</div>
								<div class="col-md-9"><input type="email" name="email" required class="form-control"
										placeholder="Nhập tài khoản"></div>
								@error('email')
								<div class="col-md-2"></div>
								<div class="col-md-9">
									<span class="error">{{ $message }}</span>
								</div>
								@enderror

							</div>
							<div class="row" style="margin-top:5px;">
								<div class="col-md-2">Mật khẩu</div>
								<div class="col-md-9"><input type="password" name="password" required
									class="form-control" placeholder="Nhập mật khẩu" id="password-input">
									<input type="checkbox" onclick="togglePasswordVisibility()"> Hiển thị mật khẩu
								</div>
								@error('password')
								<div class="col-md-2"></div>
								<div class="col-md-9">
									<span class="error">{{ $message }}</span>
								</div>
								@enderror
							</div>
							<div class="row" style="margin-top:5px;">
								<div class="col-md-2"></div>
								<div class="col-md-6"><input type="submit" value="Đăng nhập" class="btn btn-primary">
								</div>
								<div class="col-md-4" style="margin-top: 10px"><a href="{{ Route('quenmk') }}">Quên
										mật khẩu</a> </div>
							</div>
						</form>
					</div>
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