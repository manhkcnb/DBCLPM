<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Xếp thời khóa biểu</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{ asset('admin/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- load cdn ckeditor (muốn sử dụng offline thì phải download về) -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hệ thống quản lý thời khóa biểu</a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ Route('monhoc') }}"><i class="fa fa-dashboard fa-fw"></i> Quản lý môn học</a>
                        </li>                        
                        <li>
                            <a href="{{ Route('xeptkb') }}"><i class="fa fa-table fa-fw"></i>Quản lý thời khóa biểu</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('logout') }}"><i class="fa fa-edit fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="padding-top: 20px;">
            <div class="row">
                <div class="col-lg-12">
                    <!-- content here -->
                    @yield("do-du-lieu-tu-view")
                    <!-- end content -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('admin/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{ asset('admin/js/sb-admin.js') }}"></script>

    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

</body>

</html>
