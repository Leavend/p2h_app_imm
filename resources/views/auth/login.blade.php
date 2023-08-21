@include('layoutDashboard.header')

<body id="page-top">


    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="{{ route('home') }}">
                            <img class="logo-icon me-2" src="{{ url('/assetsDashboard/images/IMM up.svg') }}"
                                alt="logo">
                        </a>
                    </div>
                    <h2 class="auth-heading text-center mb-5">Log in to Dashboard P2H</h2>
                    @include('_messagesdash')
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" action="{{ route('auth.login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="signin-email" class="form-label sr-only">Username</label>
                                <input type="text" id="signin-email" name="username" class="form-control"
                                    placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="signin-password" class="form-label sr-only">Password</label>
                                <input type="password" id="signin-password" name="password" class="form-control"
                                    placeholder="Password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log
                                    In</button>
                            </div>
                        </form>
                    </div>
                </div>
                @include('layoutDashboard.footer')
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div>
        </div>
    </div>

</body>

@include('layoutDashboard.js')
