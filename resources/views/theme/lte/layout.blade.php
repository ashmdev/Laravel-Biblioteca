<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Boxed Layout</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue layout-boxed sidebar-mini">
    <div class="wrapper">
        @include("theme/$theme/header")
        @include("theme/$theme/main-sidebar")
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="callout callout-info">
                    <h4>Tip!</h4>

                    <p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when
                        working on
                        large screens because it prevents the site from stretching very wide.</p>
                </div>
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Title</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        Start creating your amazing application!
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Footer
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </section>
        </div>
        @include("theme/$theme/footer")
        @include("theme/$theme/control-sidebar")
    </div>
    @include("theme/$theme/scripts")
</body>


</html>
