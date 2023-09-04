@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper" id="main-content">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title">P2H Form pada Kendaraan
                    <span style="color: #452F92; font-weight: bold;">{{ $p2hData->kendaraan->nomor_lambung }}
                    </span>
                    , tanggal {{ \Carbon\Carbon::parse($p2hData->tanggal)->format('d-F-Y') }}
                </h1>

                <form action="" class="settings-form" method="POST">
                    @csrf


                    <!-- Info Error -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <!-- Little Info -->
                    <hr class="mb-4">
                    <div class="row g-4 settings-section">
                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Pemeriksa Kendaraan</h3>
                            <div class="section-intro">Wajib diisi dengan data sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                            placeholder="cth: Fahmi Fajeri" required name="nama_pemeriksa">
                                    </div>

                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">NIK</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->nik }}"
                                            placeholder="cth: 951***2" required name="nik">
                                    </div>

                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Departemen</label>
                                        <input type="text" class="form-control"
                                            value="{{ Auth::user()->departemen }}" list="departemen"
                                            placeholder="cth: Information Technology" required name="departemen">
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
                                        <label for="setting-input-4" class="form-label">No HP</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->no_hp }}"
                                            placeholder="cth: 081288228222" required name="no_hp">
                                    </div>
                                    {{-- <button type="submit" class="btn app-btn-primary">Save Changes</button> --}}
                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>

                    </div><!--//row-->


                    <!-- Oil & Radiator -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Oil &amp; Radiator</h3>
                            <div class="section-intro">Berikan data <b>Oil &amp; Radiator</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Oli Mesin -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Oli Mesin</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Oli Kopling -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Oli Kopling</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="oli_kopling"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="oli_kopling"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="oli_kopling"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Oli Stering -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Oli Stering</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="oli_stering"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="oli_stering"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="oli_stering"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Air Radiator -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Air Radiator</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="air_radiator"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="air_radiator"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="air_radiator"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->

                    <!-- Rem -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Rem</h3>
                            <div class="section-intro">Berikan data <b>Rem</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Rem Depan/Belakang -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Rem Depan/Belakang</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="rem_depanBelakang"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="rem_depanBelakang"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="rem_depanBelakang"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Rem Tangan -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Rem Tangan</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="rem_tangan"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="rem_tangan"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="rem_tangan"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>

                    </div><!--//row-->

                    <!-- Lampu -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Lampu</h3>
                            <div class="section-intro">Berikan data <b>Lampu</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Lampu Jauh/Dekat -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Lampu Jauh/Dekat</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="lampu_jauhDekat"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="lampu_jauhDekat"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="lampu_jauhDekat"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Lampu Reting R/L -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Lampu Reting R/L</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="lampu_reting_rL"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="lampu_reting_rL"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="lampu_reting_rL"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Lampu Belakang -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Lampu Belakang</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="lampu_belakang"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="lampu_belakang"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="lampu_belakang"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Lampu Rem -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Lampu Rem</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="lampu_rem"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="lampu_rem"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="lampu_rem"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Lampu Mundur -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Lampu Mundur</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="lampu_mundur"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="lampu_mundur"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="lampu_mundur"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Lampu Rotari -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Lampu Rotari</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="lampu_rotari"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="lampu_rotari"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="lampu_rotari"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->

                    <!-- Roda -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Roda</h3>
                            <div class="section-intro">Berikan data <b>Roda</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Roda Depan/Belakang -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Roda Depan/Belakang</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="roda_depanBelakang"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="roda_depanBelakang"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="roda_depanBelakang"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Roda Cadangan -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Roda Cadangan</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="roda_cadangan"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="roda_cadangan"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="roda_cadangan"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->

                    <!-- Body -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Body</h3>
                            <div class="section-intro">Berikan data <b>Body</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Body Fender R/L -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Body Fender R/L</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="body_fender_rL"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="body_fender_rL"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="body_fender_rL"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Body Pintu R/L -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Body Pintu R/L</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="body_pintu_rL"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="body_pintu_rL"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="body_pintu_rL"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Body Atap Kabin -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Body Atap Kabin</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="body_atap_kabin"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="body_atap_kabin"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="body_atap_kabin"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Bendera -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Bendera</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="body_bendera"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="body_bendera"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="body_bendera"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Body Lantai Kabin -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Body Lantai Kabin</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="body_lantai_kabin"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="body_lantai_kabin"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="body_lantai_kabin"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Body Karet Mounting -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Body Karet Mounting</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="body_karet_mounting"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="body_karet_mounting"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="body_karet_mounting"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Body Sepring -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Body Sepring</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="body_sepring"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="body_sepring"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="body_sepring"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->

                    <!-- Tools -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Tools</h3>
                            <div class="section-intro">Berikan data <b>Tools</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Alat Dongkrak Aksesoris -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Alat Dongkrak
                                            Aksesoris</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio"
                                                name="tools_dongkrak_aksesoris" value="baik"
                                                id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio"
                                                name="tools_dongkrak_aksesoris" value="rusak"
                                                id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio"
                                                name="tools_dongkrak_aksesoris" value="tidak ada"
                                                id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Alat Kunci Roda -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Alat Kunci Roda</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="tools_kunci_roda"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="tools_kunci_roda"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="tools_kunci_roda"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Alat Segitiga Pengaman -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Alat Segitiga Pengaman</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio"
                                                name="tools_segitiga_pengaman" value="baik"
                                                id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio"
                                                name="tools_segitiga_pengaman" value="rusak"
                                                id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio"
                                                name="tools_segitiga_pengaman" value="tidak ada"
                                                id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Alat Ganjal Ban -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Alat Ganjal Ban</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="tools_ganjal_ban"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="tools_ganjal_ban"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="tools_ganjal_ban"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->

                    <!-- Others -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Others</h3>
                            <div class="section-intro">Berikan data <b>Others</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Sabuk Pengaman -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Sabuk Pengaman</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_sabuk_pengaman" value="baik"
                                                id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_sabuk_pengaman" value="rusak"
                                                id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_sabuk_pengaman" value="tidak ada"
                                                id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Spidometer -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Spidometer</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_spidometer"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_spidometer"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_spidometer"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Klakson -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Klakson</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_klakson"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_klakson"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_klakson"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Spion -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Spion</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_spion"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_spion"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_spion"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Wiper -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Wiper</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_wiper"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_wiper"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_wiper"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Alarm Mundur -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Alarm Mundur</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_alarm_mundur"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_alarm_mundur"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_alarm_mundur"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Radio Komunikasi -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Radio Komunikasi</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_radio_komun"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_radio_komun"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_radio_komun"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Knalpot -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Knalpot</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_knalpot"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_knalpot"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_knalpot"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- No Lambung -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">No Lambung</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_no_lambung" value="baik"
                                                id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_no_lambung" value="rusak"
                                                id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_no_lambung" value="tidak ada"
                                                id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Apar -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Apar</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="others_apar"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="others_apar"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="others_apar"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Kursi Duduk -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Kursi Duduk</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_kursi_duduk" value="baik"
                                                id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_kursi_duduk" value="rusak"
                                                id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio"
                                                name="others_kursi_duduk" value="tidak ada"
                                                id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->

                    <!-- Surat -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Surat</h3>
                            <div class="section-intro">Berikan data <b>Surat</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Kotak P3K -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">Kotak P3K</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="surat_p3k"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="surat_p3k"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="surat_p3k"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- STNP & KIR -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label">STNP & KIR</label>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-baik">Baik</label>
                                            <input class="form-check-input" type="radio" name="surat_stnp_kir"
                                                value="baik" id="settings-checkbox-baik">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="surat_stnp_kir"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="surat_stnp_kir"
                                                value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->

                    <!-- Keterangan -->
                    <hr class="my-4">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-4">
                            <h3 class="section-title">Keterangan/Kesimpulan P2H</h3>
                            <div class="section-intro">Berikan data <b>Keterangan/Kesimpulan P2H</b> dengan kondisi
                                sebenar-benarnya</div>
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">

                                <div class="app-card-body">

                                    <!-- Keterangan / Kesimpulan -->
                                    <div class="form-group mb-3">
                                        <label class="form-label" style="display: block;">Keterangan /
                                            Kesimpulan</label>
                                        <textarea class="form-text" name="keterangan" id="keterangan-kesimpulan" rows="10" style="width: 100%"></textarea>
                                    </div>


                                </div><!--//form-check-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>


                    <div class="mt-3">
                        <button type="submit" class="btn app-btn-primary">Simpan P2H</button>
                    </div>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: red">
                        tidak wajib diisi</p>

            </div><!--//row-->

            </form>


        </div><!--//container-fluid-->
    </div><!--//app-content-->

    @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->


    @include('layoutDashboard.js')

</body>
