@include('layoutDashboard.header')

<body class="app app-404-page">

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-11 col-lg-7 col-xl-6 mx-auto">
                <div class="app-branding text-center mb-5">
                    <a class="app-logo" href="#"><img class="logo-icon me-2" src="../assetsDashboard/images/imm2.svg"
                            alt="logo"></a>

                </div><!--//app-branding-->
                <div class="app-card p-5 text-center shadow-sm">
                    <h1 class="page-title mb-4">404<br><span class="font-weight-light">Page Not Found</span></h1>
                    <div class="mb-4">
                        @include('_messagesdash')
                    </div>
                    @if (Auth::user()->role == 'admin')
                        <a class="btn app-btn-primary" href="{{ route('overview.list') }}">Go to main page</a>
                    @elseif (Auth::user()->role == 'user')
                        <a class="btn app-btn-primary" href="{{ route('p2h.list') }}">Go to main page</a>
                    @endif
                </div>
            </div><!--//col-->
        </div><!--//row-->
    </div><!--//container-->


    @include('layoutDashboard.footer')

    <!-- Javascript -->
    @include('layoutDashboard.JS')

</body>
