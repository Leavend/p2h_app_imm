@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper" id="main-content">

        <div class="app-content pt-3 p-md-3 p-lg-4">


            <div class="container-xl">


                <div class="row g-3 mb-4 align-items-center justify-content-between">


                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Daftar P2H</h1>
                    </div>

                    <div class="col-auto">
                        @include('_messagesdash')
                    </div>

                    <div class="col-auto">

                        <div class="page-utilities">

                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                                <!-- Kolom No_Lambung Search -->
                                <div class="col-auto">

                                    <form class="table-search-form row gx-1 align-items-center">

                                        <div class="col-auto">
                                            <input type="text" id="no_lambung"
                                                value="{{ Request::get('no_lambung') }}" name="no_lambung"
                                                class="form-control search-orders"
                                                placeholder="Cari kendaraan dari No. Lambung">
                                        </div>

                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Cari</button>
                                        </div>

                                        <div class="col-auto">
                                            <a href="{{ route('p2h.list') }}" class="btn app-btn-secondary">Clear</a>
                                        </div>

                                    </form>

                                </div><!--//col-->

                            </div><!--//row-->

                        </div><!--//table-utilities-->

                    </div><!--//col-auto-->


                </div><!--//row-->


                <div class="tab-content" id="orders-table-tab-content">


                    <div class="tab-pane fade show active" id="all" role="tabpanel"
                        aria-labelledby="orders-all-tab">

                        <div class="app-card app-card-orders-table shadow-sm mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left" style="overflow: scroll">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Nama Pemeriksa</th>
                                                <th class="cell">No. HP</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">No. Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Waktu Input</th>
                                                <th class="cell">No. Lambung</th>
                                                <th class="cell">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @forelse ($p2hToday as $x)
                                                <tr>
                                                    <td class="cell">{{ $p2hToday->firstItem() + $loop->index }}
                                                    </td>
                                                    <td class="cell">{{ $x->nama_pemeriksa ?? '-' }}</td>
                                                    <td class="cell">{{ $x->no_hp ?? '-' }}</td>
                                                    <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                    <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                    <td class="cell">{{ $x->keterangan }}</td>
                                                    @if ($x->status == 'belum diperiksa')
                                                        <td class="cell">
                                                            <span class="badge bg-danger">Belum Pemeriksaan</span>
                                                        </td>
                                                    @elseif ($x->status == 'menunggu verifikasi')
                                                        <td class="cell">
                                                            <span class="badge bg-warning">Menunggu Verifikasi</span>
                                                        </td>
                                                    @elseif ($x->status == 'terverifikasi')
                                                        <td class="cell">
                                                            <span class="badge bg-success">Terverifikasi</span>
                                                        </td>
                                                    @endif
                                                    <td class="cell">
                                                        <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                        <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                        <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                        <span class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                    </td>
                                                    <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                    <td style="display: flex; justify-content: center">
                                                        <a href="{{ url('user/p2h/edit/' . $x->kendaraan->nomor_lambung) }}"
                                                            class="btn btn-circle btn-warning"><i
                                                                class="fas fa-edit"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal for Detail -->
                                                <div class="modal fade" id="detailModal{{ $x->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="detailModalLabel{{ $x->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="detailModalLabel{{ $x->id }}">Detail P2H
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Display the details here -->
                                                                <p>Nama Pemeriksa: {{ $x->nama_pemeriksa ?? '-' }}</p>
                                                                <p>No. HP: {{ $x->no_hp ?? '-' }}</p>
                                                                <!-- ... Other details ... -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End of Modal for Detail -->

                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="13" style="text-align: center;">
                                                        Data
                                                        Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                        <nav class="app-pagination" id="p2h-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $p2hToday->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $p2hToday->url($p2hToday->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $p2hToday->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $p2hToday->lastPage(); $i++)
                                    <li class="page-item {{ $p2hToday->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $p2hToday->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li
                                    class="page-item {{ $p2hToday->currentPage() == $p2hToday->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ $p2hToday->url($p2hToday->currentPage() + 1) }}">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div><!--//tab-pane-->


                </div><!--//tab-content-->


            </div><!--//container-fluid-->


        </div><!--//app-content-->

        @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->

    @include('layoutDashboard.js')

</body>
