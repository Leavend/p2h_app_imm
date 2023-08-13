@include('layoutLanding.header')

<body id="page-top">


    @include('layoutLanding.navbar')

    <!-- Masthead Content -->
    <header class="kendaraan">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-5 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="">
                                        <img src="{{ url('../assets/img/IMM.svg') }}" style="width: 90px"
                                            alt="logo" />
                                        <div class="Welcome">
                                            <p class="mt-1 mt-3 pt-2">Welcome to</p>
                                        </div>
                                        <h4 class="mt-1 mb-4 pt-2">IMM Pemeriksaan Pengecekan Harian P2H</h4>
                                    </div>

                                    <form action="{{ url('/login') }}" method="POST">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="name" id="form2Example11" class="form-control"
                                                placeholder="Username" name="username" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control"
                                                placeholder="Password" name="password" />
                                        </div>
                                        <div class="text-center pt-2 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg mb-3" type="submit">
                                                Log in
                                            </button>
                                            <hr>
                                            {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4"></h4>
                                    @include('_messages')
                                    <p class="small mb-0">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('layoutLanding.footer')

</body>
