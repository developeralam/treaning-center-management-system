<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Treaning Center Management System Admin Panel @yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />
        <!-- Font Awesome Icons -->
        <link
            rel="stylesheet"
            href="{{
                asset('backend/plugins/fontawesome-free/css/all.min.css')
            }}"
        />
        <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')
                        }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <link
            rel="stylesheet"
            href="{{ asset('backend/dist/css/adminlte.min.css') }}"
        />
        
        {{-- Toastr --}}
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        />
        @stack('styles')
        @livewireStyles
        <script defer src="https://unpkg.com/alpinejs@3.4.1/dist/cdn.min.js"></script>
    </head>
    
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div class="dj"></div>
            <!-- Navbar -->
            @include('layouts.partials.backend.navbar')
            <!-- /.navbar -->
            
            <!-- Main Sidebar Container -->
            @include('layouts.partials.backend.aside')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                {{ $slot }}
            </div>
            <!-- /.content-wrapper -->
            
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            @include('layouts.partials.backend.footer')
        </div>
        <!-- ./wrapper -->
        
        <!-- REQUIRED SCRIPTS -->
        
        <!-- jQuery -->
        <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Moment js -->
        <script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
        <!-- Select2 -->
        <!-- Date Time picker 4 -->
        <script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')
                        }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
        {{-- Toastr --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js
        "></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
     
       
        <script>
            $(document).ready(function () {
                //Show Form
                window.addEventListener("show-form", (event) => {
                    $("#" + event.detail.id).modal("show");
            });
            //Close form
            window.addEventListener("close-form", (event) => {
                $("#" + event.detail.id).modal("hide");
            });
            
            //Toastr
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right",
            };
            //Success Message
            window.addEventListener("success-msg", (event) => {
                toastr.success(event.detail.msg, "Success!");
            });

            });
        </script>
    @stack('js')
    @livewireScripts
    </body>
</body>
</html>
