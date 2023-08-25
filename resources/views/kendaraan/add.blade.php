@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">

            <div class="container-xl">
                <h1 class="app-page-title">Tambah Kendaraan</h1>

                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Data yang harus ditambahkan</h3>
                        <div class="section-intro">
                            Tambahkan Data Kendaraan dengan benar
                            <ul>
                                <li>Jenis Kendaraan</li>
                                <li>Type Kendaraan</li>
                                <li>Nomor Lambung</li>
                                <li>Nomor Polisi</li>
                            </ul>
                            <a href="{{ route('kendaraan.list') }}">Kembali</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <form class="settings-form" action="{{ route('kendaraan.save') }}" method="POST">
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
                                        <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                                        <select class="form-select" id="jenis_kendaraan" name="jenis_kendaraan"
                                            required>
                                            <option value="" disabled selected>Pilih Jenis Kendaraan</option>
                                            <option value="LV">LV</option>
                                            <option value="Bus">Bus</option>
                                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="type_kendaraan" class="form-label">Type / Merk Kendaraan</label>
                                        <input type="text" class="form-control" id="type_kendaraan"
                                            placeholder="contoh: Innova / Hiace" name="type_kendaraan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomor_lambung" class="form-label">Nomor Lambung</label>
                                        <input type="text" class="form-control" id="nomor_lambung"
                                            name="nomor_lambung" placeholder="contoh: P123" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomor_polisi" class="form-label">Nomor Polisi</label>
                                        <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi"
                                            placeholder="contoh: KT1233DE" required>
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
