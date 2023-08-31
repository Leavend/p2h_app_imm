@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')


    <div class="app-wrapper" id="main-content">

        <div class="app-content pt-3 p-md-3 p-lg-4">

            <div class="container-xl">
                <h1 class="app-page-title">Edit User dari
                    <span style="color: #452F92; font-weight: bold;">{{ $user->name }}
                    </span>
                </h1>

                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Edit User</h3>
                        <div class="section-intro">
                            <a href="{{ route('user.list') }}">Kembali</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <form class="settings-form" action="" method="POST">

                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="contoh: Fahmi_Fajeri" value="{{ $user->username }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="contoh: Fahmi Fajeri" value="{{ $user->name }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="contoh: nama@example.com" name="email"
                                            value="{{ $user->email }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Nomor HP</label>
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="contoh: 081234567890" name="no_hp"
                                            value="{{ $user->no_hp }}">
                                    </div>

                                    <button type="submit" class="btn app-btn-primary">Simpan</button>
                                </form>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->


                <hr class="my-4">
            </div><!--//container-fluid-->

        </div><!--//app-content-->

        @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->


    @include('layoutDashboard.js')

</body>
