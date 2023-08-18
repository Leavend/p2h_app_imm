@include('layoutDashboard.header')

<body id="page-top">

    <body class="app app-login p-0">
        <div class="row g-0 app-auth-wrapper">
            <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
                <div class="d-flex flex-column align-content-end">
                    <div class="app-auth-body mx-auto">
                        <div class="app-auth-branding mb-4"><a class="app-logo" href="{{ route('home') }}">
                                <img class="logo-icon me-2" src="{{ url('/assetsDashboard/images/imm2.svg') }}"
                                    alt="logo"></a>
                        </div>
                        <h2 class="auth-heading text-center mb-5">Log in to Dashboard P2H</h2>
                        <div class="auth-form-container text-start">
                            <form class="auth-form login-form">
                                <div class="email mb-3">
                                    <label class="sr-only" for="signin-email">Username</label>
                                    <input id="signin-email" name="signin-email" type="username"
                                        class="form-control signin-email" required="required">
                                </div><!--//form-group-->
                                <div class="password mb-3">
                                    <label class="sr-only" for="signin-password">Password</label>
                                    <input id="signin-password" name="signin-password" type="password"
                                        class="form-control signin-password" placeholder="Password" required="required">
                                </div><!--//form-group-->
                                <div class="text-center">
                                    <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log
                                        In</button>
                                </div>
                            </form>
                        </div><!--//auth-form-container-->

                    </div><!--//auth-body-->

                </div><!--//flex-column-->
                @include('layoutDashboard.footer')

            </div><!--//auth-main-col-->
            <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
                <div class="auth-background-holder">
                </div>
                <div class="auth-background-mask"></div>
                <div class="auth-background-overlay p-3 p-lg-5">
                    <div class="d-flex flex-column align-content-end h-100">
                        <div class="h-100"></div>
                    </div>
                </div><!--//auth-background-overlay-->
            </div><!--//auth-background-col-->
        </div><!--//row-->
    </body>
