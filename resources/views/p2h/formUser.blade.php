@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper" id="main-content">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title">P2H Form pada Kendaraan
                    <span style="color: #452F92; font-weight: bold;">{{ $data->kendaraan->nomor_lambung }}
                    </span>
                    , {{ \Carbon\Carbon::parse($data->tanggal)->format('d-F-Y') }}
                </h1>

                <form class="settings-form">
                    @csrf


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
                                            placeholder="cth: Fahmi Fajeri" required name="name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">NIK</label>
                                        <input type="text" class="form-control" value="{{ $data->nik }}"
                                            placeholder="cth: 951***2" required name="nik">
                                    </div>

                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Departemen</label>
                                        <input type="text" class="form-control" value="{{ $data->departemen }}"
                                            list="departemen" placeholder="cth: Information Technology" required
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
                                        <label for="setting-input-4" class="form-label">No HP</label>
                                        <input type="text" class="form-control" value="{{ $data->no_hp }}"
                                            placeholder="cth: 081288228222" required name="no_hp">
                                    </div>
                                    {{-- <button type="submit" class="btn app-btn-primary">Save Changes</button> --}}
                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>

                    </div><!--//row-->


                    <!-- Oil & Radiator -->
                    {{-- <hr class="my-4">
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
                                    <div class="form-check mb-3">
                                        <label for="setting-input-1" class="form-label" style="margin-right: 20px">Oli
                                            Mesin</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="baik" id="settings-checkbox-baik">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="rusak" id="settings-checkbox-rusak">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Oli Kopling -->
                                    <div class="form-check mb-3">
                                        <label for="setting-input-1" class="form-label"
                                            style="margin-right: 20px">Oli
                                            Kopling</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_kopling"
                                                value="baik" id="settings-checkbox-baik">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_kopling"
                                                value="rusak" id="settings-checkbox-rusak">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_kopling"
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Oli Stering -->
                                    <div class="form-check mb-3">
                                        <label for="setting-input-1" class="form-label"
                                            style="margin-right: 20px">Oli
                                            Stering</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_stering"
                                                value="baik" id="settings-checkbox-baik">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_stering"
                                                value="rusak" id="settings-checkbox-rusak">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="oli_stering"
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                        </div>
                                    </div><!--//form-check-->

                                    <!-- Air Radiator -->
                                    <div class="form-check form-check-inline mb-3">
                                        <label for="setting-input-1" class="form-label"
                                            style="margin-right: 20px">Air
                                            Radiator</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="air_radiator"
                                                value="baik" id="settings-checkbox-baik">
                                            <label class="form-check-label" for="settings-checkbox-baik">Baik</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="air_radiator"
                                                value="rusak" id="settings-checkbox-rusak">
                                            <label class="form-check-label"
                                                for="settings-checkbox-rusak">Rusak</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="air_radiator"
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div>
                    </div><!--//row--> --}}

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
                                            <label class="form-check-label" for="settings-checkbox-rusak">Rusak</label>
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="rusak" id="settings-checkbox-rusak">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="settings-checkbox-tidak-ada">Tidak
                                                Ada</label>
                                            <input class="form-check-input" type="radio" name="oli_mesin"
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
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
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
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
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
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
                                                value="tidak_ada" id="settings-checkbox-tidak-ada" checked>
                                        </div>
                                    </div><!--//form-check-->

                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div>
                    </div><!--//row-->



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
