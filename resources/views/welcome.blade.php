@include('layoutLanding.header')

<body id="page-top">


    @include('layoutLanding.navbar')


    @include('layoutLanding.hero')


    <!-- Display P2H -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="p2hkendaraan" style="height: 750px">
                <div class="container
                px-4 px-lg-5">
                    <h3 class="text-center mt-0">Daftar P2H</h3>
                    <div style="float: right;">
                        <form id="filterFormP2H">
                            <div class="input-group">
                                <input type="date" value="{{ Request::get('date') }}" class="form-control"
                                    id="filterDateP2H" name="date" placeholder="search by date">
                                <button type="submit" class="btn btn-primary">Filter by Date</button>
                                <a href="{{ route('home') }}" class="btn btn-success">Clear</a>
                            </div>
                        </form>
                    </div>
                    {{-- <hr class="divider divider-light" /> --}}
                    <section class="table__header">
                        <!-- Add your header content here if needed -->
                    </section>
                    <section class="table-responsive" id="p2h-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemeriksa</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Type Kendaraan</th>
                                    <th>No Lambung</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through the filtered P2H data -->
                                @forelse ($p2hPaginator as $x)
                                    <tr>
                                        <td>{{ $p2hPaginator->firstItem() + $loop->index }}</td>
                                        <td>{{ $x->nama_pemeriksa }}</td>
                                        <td>{{ $x->kendaraan->jenis_kendaraan }}</td>
                                        <td>{{ $x->kendaraan->type_kendaraan }}</td>
                                        <td>{{ $x->kendaraan->nomor_lambung }}</td>
                                        <td>{{ $x->keterangan }}</td>
                                        <td>
                                            @if ($x->status == 'terverifikasi')
                                                <p class="status delivered">Terverifikasi</p>
                                            @elseif ($x->status == 'menunggu verifikasi')
                                                <p class="status cancelled">Menunggu Verifikasi</p>
                                            @else
                                                <p class="status shipped">Belum Diperiksa</p>
                                            @endif
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('d M Y ') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="cell" colspan="7" style="text-align: center;">
                                            Data Tidak Ada.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </section>
                    <div style="padding: 25px; float: right;">
                        {{ $p2hPaginator->appends(request()->except('p2h_page'))->links() }}
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Kendaraan -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="kendaraan" style="height: 750px">
                <div class="container px-lg-5">
                    <h3 class="text-center mt-0">Daftar Kendaraan</h3>
                    <div style="float: right;">
                        <form id="filterFormKendaraan">
                            <div class="input-group">
                                <input type="text" value="{{ Request::get('no_lambung') }}" class="form-control"
                                    id="filterNoLambung" name="no_lambung" placeholder="Tuliskan nomor lambung">
                                <button type="submit" class="btn btn-primary">Cari No Lambung</button>
                                <a href="{{ route('home') }}" class="btn btn-success">Clear</a>
                            </div>
                        </form>
                    </div>
                    {{-- <hr class="divider divider-light" /> --}}
                    <section class="table__header">
                        <!-- Add your header content here if needed -->
                    </section>
                    <section class="table-responsive" id="kendaraan-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Type Kendaraan</th>
                                    <th>No Lambung</th>
                                    <th>Tanggal Input</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kendaraanPaginator as $x)
                                    <tr>
                                        <td>{{ $kendaraanPaginator->firstItem() + $loop->index }}</td>
                                        <td>{{ $x->jenis_kendaraan }}</td>
                                        <td>{{ $x->type_kendaraan }}</td>
                                        <td>{{ $x->nomor_lambung }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($x->created_at, 'Asia/Makassar')->format('d M Y ') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="cell" colspan="7" style="text-align: center;">
                                            Data Tidak Ada.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </section>
                    <div style="padding: 25px; float: right;">
                        {{ $kendaraanPaginator->appends(request()->except('kendaraan_page'))->links() }}
                    </div>
                </div>
            </section>
        </main>
    </div>


    <!-- P2h -->
    <section class="page-section bg-imm" id="p2h">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="text-white mt-0">Lakukan Pemeriksaan</h3>
                    <hr class="divider divider-light" />
                    <a class="btn btn-light btn-xl" href="{{ route('p2h-cek.list') }}">P2H!</a>
                </div>
            </div>
        </div>
    </section>


    @include('layoutLanding.footer')


</body>
