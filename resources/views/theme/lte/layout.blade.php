@include("theme.$theme.head")
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
    <div class="wrapper">
        @include("theme/$theme/header")
        @include("theme/$theme/main-sidebar")
        <div class="content-wrapper">
            <section class="content">
                @yield('contenido')
            </section>
        </div>
        @include("theme/$theme/footer")
        @include("theme/$theme/control-sidebar")
    </div>
    @include("theme/$theme/scripts")
</body>
