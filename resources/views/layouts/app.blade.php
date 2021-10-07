<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="loading"
    data-layout-config='{
    "leftSideBarTheme": "{{ Auth::user()->theme->sidebar }}",
    "layoutBoxed": {{ Auth::user()->theme->option == 1 ? "true" : "false" }},
    "leftSidebarCondensed": {{ Auth::user()->theme->option == 2 ? "true" : "false" }},
    "leftSidebarScrollable": false,
    "darkMode": {{ Auth::user()->theme->theme == 1 ? "true" : "false" }},
    "showRightSidebarOnStart": false}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('partials.menu')
        <!-- Left Sidebar End -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('partials.nav')
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('partials.footer')
            <!-- end Footer -->

        </div>

    </div>
    <!-- END wrapper -->

    <!-- bundle -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.checkboxes.min.js') }}"></script>

    <script src="{{ asset('js/demo.datatable-init.js') }}"></script>

    <!-- end demo js-->

    <script src="{{ asset('js/toastr.min.js') }}"></script>

    {!! Toastr::message() !!}

    <script>
        @stack('scripts')
    </script>

</body>

</html>
