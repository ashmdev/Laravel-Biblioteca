@include("theme/$theme/includes/head")
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
    <div class="wrapper">
        @include("theme/$theme/includes/header")
        @include("theme/$theme/includes/main-sidebar")
        <div class="content-wrapper">
            <section class="content">
                @yield('contenido')
            </section>
        </div>
        @include("theme/$theme/includes/footer")
        @include("theme/$theme/includes/control-sidebar")
    </div>
    @include("theme/$theme/includes/scripts")
</body>
