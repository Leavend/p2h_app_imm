@include('layoutLanding.header')

<body id="page-top">

    <!-- MastHead -->
    <header class="formulir">
        <div class="container-sm px-4 px-lg-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="">
                    <div class="card bg-glass mb-3">
                        <div class="row g-0 mb-3">

                            <div class="">

                                <!-- Form Action -->
                                <form id="regForm" action="" method="post">
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


                                    <!-- First Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="">
                                                <img src="{{ asset('/assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <div class="Welcome">
                                                    <p class="mt-1 mt-3 pt-2">Form P2H Kendaraan
                                                        {{ $p2hData->kendaraan->nomor_lambung }}</p>
                                                </div>
                                                <h4 class="mt-1 mb-4 pt-2">
                                                    Pemeriksaan Pengecekan Harian P2H
                                                </h4>
                                            </div>

                                            <!-- nama_pemeriksa -->
                                            <div class="mb-3">
                                                <label for="setting-input-1" class="form-label">Nama Pemeriksa</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('nama_pemeriksa') }}" id="setting-input-1"
                                                    placeholder="Masukkan Nama Lengkap" required
                                                    name="nama_pemeriksa" />
                                            </div>

                                            <!-- nik -->
                                            <div class="mb-3">
                                                <label for="setting-input-2" class="form-label">NIK</label>
                                                <input type="text" class="form-control" value="{{ old('nik') }}"
                                                    id="setting-input-2" placeholder="Masukkan NIK anda" required
                                                    name="nik" />
                                            </div>

                                            <!-- depertemen -->
                                            <div class="mb-3">
                                                <label for="setting-input-3" class="form-label">Departemen</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('departemen') }}" list="departemen"
                                                    placeholder="Masukkan Departemen" required name="departemen">
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

                                            <!-- no_hp -->
                                            <div class="mb-3">
                                                <label for="setting-input-3" class="form-label">No HP</label>
                                                <input type="text" class="form-control" id="setting-input-3"
                                                    value="{{ old('no_hp') }}" placeholder="Masukkan No HP" required
                                                    name="no_hp" />
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Oil & Radiator Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">
                                                    Oil & Radiator
                                                </h4>
                                            </div>

                                            <!-- oli_mesin -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Oil Mesin</p>
                                                </div>
                                            </div>

                                            <!-- oli_mesin_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row1">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio" name="oli_mesin"
                                                        value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- oli_kopling -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Oli Kopling</p>
                                                </div>
                                            </div>

                                            <!-- oli_kopling_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio2_row1">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio" name="oli_kopling"
                                                        value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- air_radiator -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Air Radiator</p>
                                                </div>
                                            </div>

                                            <!-- air_radiator_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio3_row1">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="air_radiator" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="air_radiator" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="air_radiator" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- oli_stering -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Oli Stering</p>
                                                </div>
                                            </div>

                                            <!-- oli_stering_checkbox -->
                                            <div class="text-center" id="inlineRadio4_row1">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio" name="oli_stering"
                                                        value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Rem Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Rem</h4>
                                            </div>

                                            <!-- rem_depan_belakang -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Rem Depan/Belakang</p>
                                                </div>
                                            </div>

                                            <!-- rem_depan_belakang_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row2">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="rem_depanBelakang" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="rem_depanBelakang" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="rem_depanBelakang" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- rem_tangan -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Rem Tangan</p>
                                                </div>
                                            </div>

                                            <!-- rem_tangan_checkbox -->
                                            <div class="text-center" id="inlineRadio2_row2">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio" name="rem_tangan"
                                                        value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Lamp Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Lampu</h4>
                                            </div>

                                            <!-- lampu_jauh_dekat -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Lampu Jauh/Dekat</p>
                                                </div>
                                            </div>

                                            <!-- lampu_jauh_dekat_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row3">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_jauhDekat" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_jauhDekat" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_jauhDekat" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- lampu_reting_rL -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Lampu Reting R/L</p>
                                                </div>
                                            </div>

                                            <!-- lampu_reting_rL_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio2_row3">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_reting_rL" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_reting_rL" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_reting_rL" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- lampu_belakang -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Lampu Belakang</p>
                                                </div>
                                            </div>

                                            <!-- lampu_belakang_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio3_row3">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_belakang" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_belakang" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_belakang" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- lampu_rem -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Lampu Rem</p>
                                                </div>
                                            </div>

                                            <!-- lampu_rem_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio3_row3">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio" name="lampu_rem"
                                                        value="tidak ada" id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>


                                            <!-- lampu_mundur -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Lampu Mundur</p>
                                                </div>
                                            </div>

                                            <!-- lampu_mundur_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio4_row3">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_mundur" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_mundur" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_mundur" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- lampu_rotari -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Lampu Rotari</p>
                                                </div>
                                            </div>

                                            <!-- lampu_rotari_checkbox -->
                                            <div class="text-center" id="inlineRadio5_row3">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_rotari" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_rotari" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="lampu_rotari" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Roda Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Roda</h4>
                                            </div>

                                            <!-- roda_depan_belakang -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Roda Depan/Belakang</p>
                                                </div>
                                            </div>

                                            <!-- roda_depan_belakang_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row4">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="roda_depanBelakang" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="roda_depanBelakang" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="roda_depanBelakang" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- roda_cadangan_dekat -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Roda Cadangan</p>
                                                </div>
                                            </div>

                                            <!-- roda_cadangan_checkbox -->
                                            <div class="text-center" id="inlineRadio2_row4">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="roda_cadangan" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="roda_cadangan" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="roda_cadangan" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Body Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Body</h4>
                                            </div>

                                            <!-- body_fender_rL_belakang -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Body Fender R/L</p>
                                                </div>
                                            </div>

                                            <!-- body_fender_rL_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row5">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_fender_rL" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_fender_rL" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_fender_rL" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- body_pintu_rL -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Body Pintu R/L</p>
                                                </div>
                                            </div>

                                            <!-- body_pintu_rL_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio2_row5">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_pintu_rL" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_pintu_rL" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_pintu_rL" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- body_atap_kabin -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Body Atap Kabin</p>
                                                </div>
                                            </div>

                                            <!-- body_atap_kabin_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio3_row5">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_atap_kabin" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_atap_kabin" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_atap_kabin" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- body_bendera -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Bendera</p>
                                                </div>
                                            </div>

                                            <!-- body_bendera_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio4_row5">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_bendera" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_bendera" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_bendera" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- body_lantai_kabin -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Body Lantai Kabin</p>
                                                </div>
                                            </div>

                                            <!-- body_lantai_kabin_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio5_row5">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_lantai_kabin" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_lantai_kabin" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_lantai_kabin" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- body_karet_mounting -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Body Karet Mounting</p>
                                                </div>
                                            </div>

                                            <!-- body_karet_mounting_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio5_row5">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_karet_mounting" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_karet_mounting" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_karet_mounting" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- body_sepring -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Body Sepring</p>
                                                </div>
                                            </div>

                                            <!-- body_sepring_checkbox -->
                                            <div class="text-center" id="inlineRadio6_row5">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_sepring" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_sepring" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="body_sepring" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Tools Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Tools</h4>
                                            </div>

                                            <!-- tools_dongkrak_aksesoris -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Alat Dongkrak Aksesoris</p>
                                                </div>
                                            </div>

                                            <!-- tools_dongkrak_aksesoris_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row6">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_dongkrak_aksesoris" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- tools_kunci_roda -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Alat Kunci Roda</p>
                                                </div>
                                            </div>

                                            <!-- tools_kunci_roda_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio2_row6">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_kunci_roda" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_kunci_roda" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_kunci_roda" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- tools_segitiga_pengaman -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Alat Segitiga Pengaman</p>
                                                </div>
                                            </div>

                                            <!-- tools_segitiga_pengaman_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio3_row6">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_segitiga_pengaman" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- tools_ganjal_ban -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Alat Ganjal Ban</p>
                                                </div>
                                            </div>

                                            <!-- tools_ganjal_ban_checkbox -->
                                            <div class="text-center" id="inlineRadio4_row6">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_ganjal_ban" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_ganjal_ban" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="tools_ganjal_ban" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Others Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Others</h4>
                                            </div>

                                            <!-- others_sabuk_pengaman -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Sabuk Pengaman</p>
                                                </div>
                                            </div>

                                            <!-- others_sabuk_pengaman_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_sabuk_pengaman" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_spidometer -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Spidometer</p>
                                                </div>
                                            </div>

                                            <!-- others_spidometer_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio2_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_spidometer" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_spidometer" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_spidometer" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_klakson -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Klakson</p>
                                                </div>
                                            </div>

                                            <!-- others_klakson_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio3_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_klakson" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_klakson" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_klakson" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_spion -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Spion</p>
                                                </div>
                                            </div>

                                            <!-- others_spion_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio4_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_spion" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_spion" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_spion" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_wiper -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Wiper</p>
                                                </div>
                                            </div>

                                            <!-- others_wiper_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio5_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_wiper" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_wiper" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_wiper" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_alarm_mundur -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Alarm Mundur</p>
                                                </div>
                                            </div>

                                            <!-- others_alarm_mundur_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio6_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_alarm_mundur" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_alarm_mundur" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_alarm_mundur" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_radio_komun -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Radio Komunikasi</p>
                                                </div>
                                            </div>

                                            <!-- others_radio_komun_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio7_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_radio_komun" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_radio_komun" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_radio_komun" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_knalpot -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Knalpot</p>
                                                </div>
                                            </div>

                                            <!-- others_knalpot_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio8_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_knalpot" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_knalpot" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_knalpot" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_no_lambung -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>No Lambung</p>
                                                </div>
                                            </div>

                                            <!-- others_no_lambung_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio9_row7">
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_no_lambung" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_apar -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Apar</p>
                                                </div>
                                            </div>

                                            <!-- others_apar_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio10_row7">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_apar" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_apar" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_apar" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- others_kursi_duduk -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Kursi Duduk</p>
                                                </div>
                                            </div>

                                            <!-- others_kursi_duduk_checkbox -->
                                            <div class="text-center" id="inlineRadio11_row7">
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
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="others_kursi_duduk" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Surat Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Surat</h4>
                                            </div>

                                            <!-- surat_p3k -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Kotak P3K</p>
                                                </div>
                                            </div>

                                            <!-- surat_p3k_checkbox -->
                                            <div class="text-center mb-3" id="inlineRadio1_row8">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="surat_p3k" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="surat_p3k" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="surat_p3k" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                            <!-- surat_stnp_kir -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>STNP & KIR</p>
                                                </div>
                                            </div>

                                            <!-- surat_stnp_kir_checkbox -->
                                            <div class="text-center" id="inlineRadio2_row8">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-baik">Baik</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="surat_stnp_kir" value="baik"
                                                        id="settings-checkbox-baik">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-rusak">Rusak</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="surat_stnp_kir" value="rusak"
                                                        id="settings-checkbox-rusak">
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label"
                                                        for="settings-checkbox-tidak-ada">Tidak
                                                        Ada</label>
                                                    <input class="form-check-input" type="radio"
                                                        name="surat_stnp_kir" value="tidak ada"
                                                        id="settings-checkbox-tidak-ada" checked>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Keterangan Form -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3">

                                            <!-- Header -->
                                            <div class="header">
                                                <h4 class="mt-1 pt-2 text-center">Kondisi UNIT</h4>
                                            </div>

                                            <!-- Keterangan -->
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="text">
                                                    <p>Keterangan</p>
                                                </div>
                                            </div>

                                            <!-- Keterangan_longtext -->
                                            <div class="text-center mb-3" id="inlineRadio1_row8">
                                                <textarea class="form-control" id="keterangan_longtext" name="keterangan" rows="4"></textarea>
                                            </div>
                                            <p
                                                style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: red">
                                                tidak wajib diisi</p>


                                        </div>

                                    </div>

                                    <!-- Button -->
                                    <div class="buttonFr">
                                        <div class="btn btn-primary" style="float: right">
                                            <div class="button">
                                                <button type="submit" class="btn app-btn-primary">
                                                    Simpan P2H
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('layoutLanding.footer')

</body>
