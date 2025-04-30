<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Dashboard | Appzia - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- Bootstrap Css -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/backend/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/custom.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    @livewireStyles

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="light"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <livewire:backend.theme.header />

        <!-- ========== Left Sidebar Start ========== -->
        <livewire:backend.theme.sidebar />
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @yield('content')

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Appzia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <script data-navigate-once src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/metismenu/metisMenu.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/node-waves/waves.min.js') }}"></script>


    <!-- toastr plugin -->
    <script data-navigate-once src="{{ asset('assets/libs/toastr/build/toastr.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>

    @livewireScripts

    @yield('scripts')

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('alert', (event) => {
                // Since the event is an array, access the first item
                const {
                    type,
                    message
                } = event[0];

                // Check if 'type' and 'message' are defined
                if (type === undefined || message === undefined) {
                    console.error('Error: type or message is undefined!');
                } else {
                    // Show toastr notification based on the type
                    if (type === 'success') {
                        toastr.success(message);
                    } else if (type === 'info') {
                        toastr.info(message);
                    } else if (type === 'warning') {
                        toastr.warning(message);
                    } else if (type === 'error') {
                        toastr.error(message);
                    }
                }

            });
        });
    </script>
</body>


</html>