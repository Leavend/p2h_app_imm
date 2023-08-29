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

                                <form id="regForm" action="">


                                    <div class="tab">
                      <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <div class="Welcome">
                            <p class="mt-1 mt-3 pt-2">Welcome to</p>
                          </div>
                          <h4 class="mt-1 mb-4 pt-2">
                            IMM Pemeriksaan Pengecekan Harian P2H
                          </h4>
                        </div>
                        <div class="mb-3">
                          <label for="setting-input-1" class="form-label"
                            >Nama Pemeriksa</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="setting-input-1"
                            placeholder="Tulis Nama Lengkap"
                            required
                          />
                        </div>
                        <div class="mb-3">
                          <label for="setting-input-2" class="form-label"
                            >NIK</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="setting-input-2"
                            placeholder="Masukkan NIK"
                            required
                          />
                        </div>
                        <div class="mb-3">
                          <label for="setting-input-3" class="form-label"
                            >Departemen</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="setting-input-3"
                            placeholder="Departemen"
                            required
                          />
                        </div>
                        <div class="mb-5">
                          <label for="setting-input-3" class="form-label"
                            >No HP</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id="setting-input-3"
                            placeholder="Nomor Handphone"
                            required
                          />
                        </div>
                      </div>
                    </div>
                                                

                                    

                                    <!-- Detail Oil & Radiator -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="header">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">
                                                    Oli dan Radiator
                                                </h4>
                                            </div>

                                            <!-- Oli Mesin -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Oli Mesin</label>
                                                <select class="form-select" id="setting-input" name="oli_mesin"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('oli_mesin') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('oli_mesin') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak ada"
                                                        {{ old('oli_mesin') === 'tidak ada' ? 'selected' : '' }}>Tidak
                                                        Ada</option>
                                                </select>
                                            </div>

                                            <!-- Oli Kopling -->
                                            <div class="mb-3">
                                                <label class="form-label">Oli Kopling</label>
                                                <select class="form-select" name="oli_kopling" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('oli_kopling') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('oli_kopling') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('oli_kopling') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Air Radiator -->
                                            <div class="mb-3">
                                                <label class="form-label">Air Radiator</label>
                                                <select class="form-select" name="air_radiator" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('air_radiator') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('air_radiator') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('air_radiator') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Oli Stering -->
                                            <div class="mb-3">
                                                <label class="form-label">Oli Stering</label>
                                                <select class="form-select" name="oli_stering" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('oli_stering') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('oli_stering') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('oli_stering') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Detail Rem -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">Rem</h4>
                                            </div>

                                            <!-- Rem Depan/Belakang -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Rem
                                                    Depan/Belakang</label>
                                                <select class="form-select" id="setting-input"
                                                    name="rem_depanBelakang" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('rem_depanBelakang') === 'baik' ? 'selected' : '' }}>
                                                        Baik</option>
                                                    <option value="rusak"
                                                        {{ old('rem_depanBelakang') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('rem_depanBelakang') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Rem Tangan -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Rem Tangan</label>
                                                <select class="form-select" id="setting-input" name="rem_tangan"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('rem_tangan') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('rem_tangan') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('rem_tangan') === 'tidak_ada' ? 'selected' : '' }}>Tidak
                                                        Ada</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Detail Lampu -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">Lampu</h4>
                                            </div>

                                            <!-- Jauh/Dekat -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Jauh/Dekat</label>
                                                <select class="form-select" id="setting-input" name="lampu_jauhDekat"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('lampu_jauhDekat') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('lampu_jauhDekat') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('lampu_jauhDekat') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Reting R/L -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Reting R/L</label>
                                                <select class="form-select" id="setting-input" name="lampu_reting_rL"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('lampu_reting_rL') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('lampu_reting_rL') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('lampu_reting_rL') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Rem -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Lampu Rem</label>
                                                <select class="form-select" id="setting-input" name="lampu_rem"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('lampu_rem') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('lampu_rem') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('lampu_rem') === 'tidak_ada' ? 'selected' : '' }}>Tidak
                                                        Ada</option>
                                                </select>
                                            </div>

                                            <!-- Mundur -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Lampu Mundur</label>
                                                <select class="form-select" id="setting-input" name="lampu_mundur"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('lampu_mundur') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('lampu_mundur') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('lampu_mundur') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Rotari -->
                                            <div class="mb-3">
                                                <label for="setting-input" class="form-label">Lampu Rotari</label>
                                                <select class="form-select" id="setting-input" name="lampu_rotari"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('lampu_rotari') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('lampu_rotari') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('lampu_rotari') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Detail Roda -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">Roda</h4>
                                            </div>

                                            <!-- Depan/Belakang -->
                                            <div class="mb-3">
                                                <label for="roda_depanBelakang"
                                                    class="form-label">Depan/Belakang</label>
                                                <select class="form-select" id="roda_depanBelakang"
                                                    name="roda_depanBelakang" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('roda_depanBelakang') === 'baik' ? 'selected' : '' }}>
                                                        Baik</option>
                                                    <option value="rusak"
                                                        {{ old('roda_depanBelakang') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('roda_depanBelakang') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Cadangan -->
                                            <div class="mb-3">
                                                <label for="roda_cadangan" class="form-label">Cadangan</label>
                                                <select class="form-select" id="roda_cadangan" name="roda_cadangan"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('roda_cadangan') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('roda_cadangan') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('roda_cadangan') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Detail Body -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="header">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">Body</h4>
                                            </div>

                                            <!-- Fender R/L -->
                                            <div class="mb-3">
                                                <label for="body_fender" class="form-label">Fender R/L</label>
                                                <select class="form-select" id="body_fender" name="body_fender_rL"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('body_fender_rL') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('body_fender_rL') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('body_fender_rL') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Pintu R/L -->
                                            <div class="mb-3">
                                                <label for="body_pintu" class="form-label">Pintu R/L</label>
                                                <select class="form-select" id="body_pintu" name="body_pintu_rL"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('body_pintu_rL') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('body_pintu_rL') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('body_pintu_rL') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak
                                                        Ada</option>
                                                </select>
                                            </div>

                                            <!-- Atap Kabin -->
                                            <div class="mb-3">
                                                <label for="body_atap" class="form-label">Atap Kabin</label>
                                                <select class="form-select" id="body_atap" name="body_atap_kabin"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('body_atap_kabin') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('body_atap_kabin') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('body_atap_kabin') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak
                                                        Ada</option>
                                                </select>
                                            </div>

                                            <!-- Bendera -->
                                            <div class="mb-3">
                                                <label for="body_bendera" class="form-label">Bendera</label>
                                                <select class="form-select" id="body_bendera" name="body_bendera"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('body_bendera') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('body_bendera') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('body_bendera') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Body Lantai Kabin -->
                                            <div class="mb-3">
                                                <label for="	body_lantai_kabin" class="form-label">Bendera</label>
                                                <select class="form-select" id="	body_lantai_kabin"
                                                    name="	body_lantai_kabin" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('	body_lantai_kabin') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('	body_lantai_kabin') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('	body_lantai_kabin') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Karet Mounting -->
                                            <div class="mb-3">
                                                <label for="body_karet_mounting" class="form-label">Karet
                                                    Mounting</label>
                                                <select class="form-select" id="body_karet_mounting"
                                                    name="body_karet_mounting" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('body_karet_mounting') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('body_karet_mounting') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('body_karet_mounting') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak
                                                        Ada</option>
                                                </select>
                                            </div>

                                            <!-- Sepring -->
                                            <div class="mb-3">
                                                <label for="body_sepring" class="form-label">Sepring</label>
                                                <select class="form-select" id="body_sepring" name="body_sepring"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('body_sepring') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('body_sepring') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('body_sepring') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Detail Tools -->
                                    <div class="tab">
                                        <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="header">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">Tools</h4>
                                            </div>

                                            <!-- Dongkrak Aksesoris -->
                                            <div class="mb-3">
                                                <label for="tools_dongkrak_aksesoris" class="form-label">Dongkrak
                                                    Aksesoris</label>
                                                <select class="form-select" id="tools_dongkrak_aksesoris"
                                                    name="tools_dongkrak_aksesoris" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('tools_dongkrak_aksesoris') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('tools_dongkrak_aksesoris') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('tools_dongkrak_aksesoris') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Kunci Roda -->
                                            <div class="mb-3">
                                                <label for="tools_kunci_roda" class="form-label">Kunci Roda</label>
                                                <select class="form-select" id="tools_kunci_roda"
                                                    name="tools_kunci_roda" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('tools_kunci_roda') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('tools_kunci_roda') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('tools_kunci_roda') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Segitiga Pengaman -->
                                            <div class="mb-3">
                                                <label for="tools_segitiga_pengaman" class="form-label">Segitiga
                                                    Pengaman</label>
                                                <select class="form-select" id="tools_segitiga_pengaman"
                                                    name="tools_segitiga_pengaman" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('tools_segitiga_pengaman') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('tools_segitiga_pengaman') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('tools_segitiga_pengaman') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Ganjal Ban -->
                                            <div class="mb-3">
                                                <label for="tools_ganjal_ban" class="form-label">Ganjal Ban</label>
                                                <select class="form-select" id="tools_ganjal_ban"
                                                    name="tools_ganjal_ban" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('tools_ganjal_ban') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('tools_ganjal_ban') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('tools_ganjal_ban') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Detail Others -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="header">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">Others</h4>
                                            </div>

                                            <!-- Sabuk Pengaman -->
                                            <div class="mb-3">
                                                <label for="others_sabuk_pengaman" class="form-label">Sabuk
                                                    Pengaman</label>
                                                <select class="form-select" id="others_sabuk_pengaman"
                                                    name="others_sabuk_pengaman" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_sabuk_pengaman') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_sabuk_pengaman') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_sabuk_pengaman') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Spidometer -->
                                            <div class="mb-3">
                                                <label for="others_spidometer" class="form-label">Spidometer</label>
                                                <select class="form-select" id="others_spidometer"
                                                    name="others_spidometer" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_spidometer') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_spidometer') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_spidometer') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Klakson -->
                                            <div class="mb-3">
                                                <label for="others_klakson" class="form-label">Klakson</label>
                                                <select class="form-select" id="others_klakson" name="others_klakson"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_klakson') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_klakson') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_klakson') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Spion -->
                                            <div class="mb-3">
                                                <label for="others_spion" class="form-label">Spion</label>
                                                <select class="form-select" id="others_spion" name="others_spion"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_spion') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_spion') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_spion') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Wiper -->
                                            <div class="mb-3">
                                                <label for="others_wiper" class="form-label">Wiper</label>
                                                <select class="form-select" id="others_wiper" name="others_wiper"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_wiper') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_wiper') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_wiper') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Alarm Mundur -->
                                            <div class="mb-3">
                                                <label for="others_alarm_mundur" class="form-label">Alarm
                                                    Mundur</label>
                                                <select class="form-select" id="others_alarm_mundur"
                                                    name="others_alarm_mundur" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_alarm_mundur') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_alarm_mundur') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_alarm_mundur') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Radio Komunikasi -->
                                            <div class="mb-3">
                                                <label for="others_radio_komun" class="form-label">Radio
                                                    Komunikasi</label>
                                                <select class="form-select" id="others_radio_komun"
                                                    name="others_radio_komun" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_radio_komun') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_radio_komun') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_radio_komun') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Knalpot -->
                                            <div class="mb-3">
                                                <label for="others_knalpot" class="form-label">Knalpot</label>
                                                <select class="form-select" id="others_knalpot" name="others_knalpot"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_knalpot') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_knalpot') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_knalpot') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- No. Lambung -->
                                            <div class="mb-3">
                                                <label for="others_no_lambung" class="form-label">No. Lambung</label>
                                                <select class="form-select" id="others_no_lambung"
                                                    name="others_no_lambung" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_no_lambung') === 'baik' ? 'selected' : '' }}>
                                                        Baik</option>
                                                    <option value="rusak"
                                                        {{ old('others_no_lambung') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_no_lambung') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Apar -->
                                            <div class="mb-3">
                                                <label for="others_apar" class="form-label">Apar</label>
                                                <select class="form-select" id="others_apar" name="others_apar"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_apar') === 'baik' ? 'selected' : '' }}>Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('others_apar') === 'rusak' ? 'selected' : '' }}>Rusak
                                                    </option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_apar') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- Kursi Duduk -->
                                            <div class="mb-3">
                                                <label for="others_kursi_duduk" class="form-label">Kursi Duduk</label>
                                                <select class="form-select" id="others_kursi_duduk"
                                                    name="others_kursi_duduk" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('others_kursi_duduk') === 'baik' ? 'selected' : '' }}>
                                                        Baik</option>
                                                    <option value="rusak"
                                                        {{ old('others_kursi_duduk') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('others_kursi_duduk') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>


                                        </div>
                                    </div>

                                    <!-- Detail Surat -->
                                    <div class="tab">
                                        <div class="card-body p-md-5 mx-md-5 mx-3 mt-5">

                                            <!-- Header -->
                                            <div class="header">
                                                <img src="{{ asset('assets/img/IMM.svg') }}" style="width: 90px"
                                                    alt="logo" />
                                                <h4 class="mt-1 pt-2 text-center">Surat</h4>
                                            </div>

                                            <!-- P3K -->
                                            <div class="mb-3">
                                                <label for="surat_p3k" class="form-label">P3K</label>
                                                <select class="form-select" id="surat_p3k" name="surat_p3k" required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('surat_p3k') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('surat_p3k') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('surat_p3k') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                            <!-- STNP & KIR -->
                                            <div class="mb-3">
                                                <label for="surat_stnp_kir" class="form-label">STNP & KIR</label>
                                                <select class="form-select" id="surat_stnp_kir" name="surat_stnp_kir"
                                                    required>
                                                    <option value="" disabled selected>Pilih kondisi</option>
                                                    <option value="baik"
                                                        {{ old('surat_stnp_kir') === 'baik' ? 'selected' : '' }}>
                                                        Baik
                                                    </option>
                                                    <option value="rusak"
                                                        {{ old('surat_stnp_kir') === 'rusak' ? 'selected' : '' }}>
                                                        Rusak</option>
                                                    <option value="tidak_ada"
                                                        {{ old('surat_stnp_kir') === 'tidak_ada' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="buttonFr">
                                        <div class="btn btn-primary" style="float: right">
                                            <submit type="submit" id="nextBtn" onclick="nextPrev(1)">
                                                Next
                                            </submit>
                                        </div>
                                        <div class="btn btn-primary hide-on-first">
                                            <submit type="button" id="prevBtn" onclick="nextPrev(-1)">
                                                Previous
                                            </submit>
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
