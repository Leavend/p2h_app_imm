@include('layoutLanding.header')

<body id="page-top">

    <!-- edit form -->
    <section class="edit-form">
        <div class="container-sm px-4 px-lg-5 h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <h1>Edit Formulir</h1>
                <!-- Tempatkan elemen-elemen formulir yang ingin Anda edit di sini -->

                <div class="card-body p-md-3 mx-md-5 mx-3 mt-5">
                   <form method="post">
                        @csrf
                        <!-- Elemen-elemen formulir -->
                        <div class="mb-3">
                            <label for="nama">Nama:</label>
                            <input class="form-control" placeholder="Nama" type="text" id="nama" name="nama_pemeriksa">
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label"
                              >NIK</label >
                            <input
                              type="text"
                              class="form-control"
                              id="setting-input-2"
                              placeholder="Masukkan NIK"
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
                            />
                          </div>

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
                    </form>
                </div>

            </div>

        </div>
    </section>

    <!-- footer -->
    @include('layoutLanding.footer')
</body>
