@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper" id="main-content">

        <div class="app-content pt-3 p-md-3 p-lg-4">

            <div class="container-xl">
                <h1 class="app-page-title">Tambah User</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">

                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Data yang harus ditambahkan</h3>
                        <div class="section-intro">
                            Tambahkan Data User dengan benar
                            <ul>
                                <li>Username</li>
                                <li>Nama</li>
                                <li>NIK</li>
                                <li>Email</li>
                                <li>No HP yang dapat dihubungi</li>
                                <li>Departemen Terkait</li>
                                <li>Password</li>
                            </ul>
                            <a href="{{ route('user.list') }}">Kembali</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <form class="settings-form" action="{{ route('user.save') }}" method="POST">
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
                                        <label for="setting-input-1" class="form-label">Username<span class="ms-2"
                                                data-bs-container="body" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus" data-bs-placement="top"
                                                data-bs-content="Username digunakan untuk mengakses Dashboard User."><svg
                                                    width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-info-circle" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                                    <circle cx="8" cy="4.5" r="1" />
                                                </svg></span></label>
                                        <input type="text" class="form-control" value="{{ old('username') }}" id="setting-input-1"
                                            placeholder="contoh: Fahmi_Fajeri" name="username" required>
                                    </div>
                                    <!-- Tambahkan form untuk input nama, email, no_hp, dan password -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" value="{{ old('name') }}" id="setting-input-2"
                                            placeholder="contoh: Fahmi Fajeri" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" value="{{ old('nik') }}" id="setting-input-2"
                                            placeholder="contoh: 98xxx988" name="nik" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="{{ old('email') }}" id="setting-input-3"
                                            placeholder="contoh: hello@companywebsite.com" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No. HP</label>
                                        <input type="tel" class="form-control" value="{{ old('no_hp') }}" id="no_hp" name="no_hp"
                                            placeholder="contoh: 081320202020" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="departemen" class="form-label">Departemen</label>
                                        <input type="text" class="form-control" value="{{ old('departemen') }}"
                                            list="departemen" placeholder="contoh: Teknologi Informasi" required
                                            name="departemen">
                                        <datalist id="departemen">
                                            <option value="ASSET MANAGEMENT"></option>
                                            <option value="COAL HANDLING & PROCESSING"></option>
                                            <option value="COMMUNITY DEVELOPMENT"></option>
                                            <option value="ENVIRONMENT"></option>
                                            <option value="EXTERNAL AFFAIRS"></option>
                                            <option value="FINANCE & ACCOUNTING"></option>
                                            <option value="GENERAL AFFAIR"></option>
                                            <option value="GENERAL SERVICES"></option>
                                            <option value="HUMAN RESOURCES"></option>
                                            <option value="IMM MANAGEMENT SITE"></option>
                                            <option value="INFORMATION TECHNOLOGY"></option>
                                            <option value="IPCC OPERATION"></option>
                                            <option value="LABORATORY"></option>
                                            <option value="HSEC"></option>
                                            <option value="MAINTENANCE ENGINEERING"></option>
                                            <option value="MEDICAL SERVICES"></option>
                                            <option value="MINE GEOLOGY"></option>
                                            <option value="MINE OPERATION"></option>
                                            <option value="MINE PLANNING"></option>
                                            <option value="MINE SURVEY"></option>
                                            <option value="PORT"></option>
                                            <option value="PORT MAINTENANCE"></option>
                                            <option value="PORT, UTILITIES & MAINTENANCE"></option>
                                            <option value="PROCUREMENT"></option>
                                            <option value="PROJECT & CONSTRUCTION"></option>
                                            <option value="SAFETY"></option>
                                            <option value="SECURITY"></option>
                                            <option value="SYSTEM & PERFORMANCE MANAGEMENT"></option>
                                            <option value="UTILITIES OPERATION"></option>
                                        </datalist>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required>
                                    </div>
                                    <button type="submit" class="btn app-btn-primary">Tambahkan</button>
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
