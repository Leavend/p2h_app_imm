@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper">

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
                                    <form class="table-search-form row gx-1 align-items-center"
                                        id="filterFormNoLambung">
                                        <div class="col-auto">
                                            <input type="text" id="no_lambung"
                                                value="{{ Request::get('no_lambung') }}" name="no_lambung"
                                                class="form-control search-orders"
                                                placeholder="Cari P2H dari No. Lambung">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Cari</button>
                                        </div>
                                    </form>
                                </div><!--//col-->

                                <!-- Kolom Tanggal Search -->
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center" id="filterFormDate">
                                        <div class="col-auto">
                                            <input type="date" id="date" value="{{ Request::get('date') }}"
                                                name="date" class="form-control search-orders">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Cari</button>
                                        </div>
                                    </form>
                                </div><!--//col-->

                                <!-- Kolom Clear Search -->
                                <div class="col-auto">

                                    <form class="table-search-form row gx-1 align-items-center">

                                        <div class="col-auto">
                                            <a href="{{ route('p2h.list.admin') }}"
                                                class="btn app-btn-secondary">Clear</a>
                                        </div>

                                    </form>

                                </div><!--//col-->

                                <!-- Kolom CSV -->
                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="{{ route('p2h.download.csv') }}">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-download me-1" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path fill-rule="evenodd"
                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg>
                                        Download CSV
                                    </a>
                                </div>

                            </div><!--//row-->

                        </div><!--//table-utilities-->

                    </div><!--//col-auto-->


                </div><!--//row-->


                <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-lg flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#belum" role="tab" aria-controls="bus" aria-selected="false">Belum Pemeriksaan</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                        href="#menunggu" role="tab" aria-controls="orders-pending" aria-selected="false">Menunggu
                        Verifikasi</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#verifikasi" role="tab" aria-controls="orders-cancelled"
                        aria-selected="false">Terverifikasi</a>
                </nav>

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
                                                <th class="cell">No. Lambung</th>
                                                <th class="cell">No. Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Baik</th>
                                                <th class="cell">Rusak</th>
                                                <th class="cell">Tidak Ada</th>
                                                <th class="cell">Waktu Input</th>
                                                <th class="cell">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @forelse ($All as $x)
                                                <tr>
                                                    <td class="cell">{{ ++$no }}</td>
                                                    <td class="cell">{{ $x->nama_pemeriksa ?? '-' }}</td>
                                                    <td class="cell">{{ $x->no_hp ?? '-' }}</td>
                                                    <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                    <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
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
                                                    <td>
                                                        <span
                                                            class="badge bg-success">{{ $Counts[$x->kendaraan->id]['baik'] }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-danger">{{ $Counts[$x->kendaraan->id]['rusak'] }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-warning">{{ $Counts[$x->kendaraan->id]['tidak ada'] }}
                                                        </span>
                                                    </td>
                                                    <td class="cell">
                                                        <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                        <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                        <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                        <span class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                    </td>
                                                    <td style="display: flex; justify-content: center">
                                                        <a href="#" class="btn btn-circle btn-info"
                                                            data-toggle="modal"
                                                            data-target="#detailModal{{ $x->id }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ url('admin/p2h/edit/' . $x->id) }}"
                                                            class="btn btn-circle btn-warning"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="{{ url('admin/p2h/hapus/' . $x->id) }}"
                                                            class="btn btn-circle btn-danger"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
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
                                <li class="page-item {{ $All->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $All->url($All->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $All->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $All->lastPage(); $i++)
                                    <li class="page-item {{ $All->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $All->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li
                                    class="page-item {{ $All->currentPage() == $All->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $All->url($All->currentPage() + 1) }}">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="belum" role="tabpanel" aria-labelledby="orders-paid-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left" style="overflow: scroll">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Nama Pemeriksa</th>
                                                <th class="cell">No. HP</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">No. Lambung</th>
                                                <th class="cell">No. Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Baik</th>
                                                <th class="cell">Rusak</th>
                                                <th class="cell">Tidak Ada</th>
                                                <th class="cell">Waktu Input</th>
                                                <th class="cell">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @forelse ($All as $x)
                                                @if ($x->status === 'belum diperiksa')
                                                    <?php $dataExist = true; ?>
                                                    <tr>
                                                        <td class="cell">{{ ++$no }}</td>
                                                        <td class="cell">{{ $x->nama_pemeriksa }}</td>
                                                        <td class="cell">{{ $x->no_hp }}</td>
                                                        <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                        <td class="cell">{{ $x->keterangan }}</td>
                                                        <td class="cell">
                                                            <span class="badge bg-danger">
                                                                Belum Pemeriksaan
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success">{{ $Counts[$x->kendaraan->id]['baik'] }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger">{{ $Counts[$x->kendaraan->id]['rusak'] }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-warning">{{ $Counts[$x->kendaraan->id]['tidak ada'] }}
                                                            </span>
                                                        </td>
                                                        <td class="cell">
                                                            <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                            <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                            <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                            <span
                                                                class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                        </td>
                                                        <td class="cell"
                                                            style="display: flex; justify-content: center">
                                                            <a href="#" class="btn btn-circle btn-info"
                                                                data-toggle="modal"
                                                                data-target="#detailModal{{ $x->id }}">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{ url('admin/p2h/edit/' . $x->id) }}"
                                                                class="btn btn-circle btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ url('admin/p2h/hapus/' . $x->id) }}"
                                                                class="btn btn-circle btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="13" style="text-align: center;">
                                                        Data
                                                        Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="13" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="menunggu" role="tabpanel" aria-labelledby="orders-pending-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left" style="overflow: scroll">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Nama Pemeriksa</th>
                                                <th class="cell">No. HP</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">No. Lambung</th>
                                                <th class="cell">No. Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Baik</th>
                                                <th class="cell">Rusak</th>
                                                <th class="cell">Tidak Ada</th>
                                                <th class="cell">Waktu Input</th>
                                                <th class="cell">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @forelse ($All as $x)
                                                @if ($x->status === 'menunggu verifikasi')
                                                    <?php $dataExist = true; ?>
                                                    <tr>
                                                        <td class="cell">{{ ++$no }}</td>
                                                        <td class="cell">{{ $x->nama_pemeriksa }}</td>
                                                        <td class="cell">{{ $x->no_hp }}</td>
                                                        <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                        <td class="cell">{{ $x->keterangan }}</td>
                                                        <td class="cell">
                                                            <span class="badge bg-warning">
                                                                Menunggu Verifikasi
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success">{{ $Counts[$x->kendaraan->id]['baik'] }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger">{{ $Counts[$x->kendaraan->id]['rusak'] }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-warning">{{ $Counts[$x->kendaraan->id]['tidak ada'] }}
                                                            </span>
                                                        </td>
                                                        <td class="cell">
                                                            <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                            <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                            <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                            <span
                                                                class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                        </td>
                                                        <td class="cell"
                                                            style="display: flex; justify-content: center">
                                                            <a href="#" class="btn btn-circle btn-info"
                                                                data-toggle="modal"
                                                                data-target="#detailModal{{ $x->id }}">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{ url('admin/p2h/edit/' . $x->id) }}"
                                                                class="btn btn-circle btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ url('admin/p2h/hapus/' . $x->id) }}"
                                                                class="btn btn-circle btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="13" style="text-align: center;">
                                                        Data
                                                        Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="13" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="verifikasi" role="tabpanel"
                        aria-labelledby="orders-cancelled-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left" style="overflow: scroll">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Nama Pemeriksa</th>
                                                <th class="cell">No. HP</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">No. Lambung</th>
                                                <th class="cell">No. Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Baik</th>
                                                <th class="cell">Rusak</th>
                                                <th class="cell">Tidak Ada</th>
                                                <th class="cell">Waktu Input</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @forelse ($All as $x)
                                                @if ($x->status === 'terverifikasi')
                                                    <?php $dataExist = true; ?>
                                                    <tr>
                                                        <td class="cell">{{ ++$no }}</td>
                                                        <td class="cell">{{ $x->nama_pemeriksa }}</td>
                                                        <td class="cell">{{ $x->no_hp }}</td>
                                                        <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                        <td class="cell">{{ $x->keterangan }}</td>
                                                        <td class="cell">
                                                            <span class="badge bg-success">
                                                                Terverifikasi
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success">{{ $Counts[$x->kendaraan->id]['baik'] }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger">{{ $Counts[$x->kendaraan->id]['rusak'] }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-warning">{{ $Counts[$x->kendaraan->id]['tidak ada'] }}
                                                            </span>
                                                        </td>
                                                        <td class="cell">
                                                            <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                            <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                            <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                            <span
                                                                class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                        </td>
                                                        <td class="cell"
                                                            style="display: flex; justify-content: center">
                                                            <a href="#" class="btn btn-circle btn-info"
                                                                data-toggle="modal"
                                                                data-target="#detailModal{{ $x->id }}">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{ url('admin/p2h/edit/' . $x->id) }}"
                                                                class="btn btn-circle btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ url('admin/p2h/hapus/' . $x->id) }}"
                                                                class="btn btn-circle btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="13" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="13" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                    </div><!--//tab-pane-->

                </div><!--//tab-content-->


            </div><!--//container-fluid-->


        </div><!--//app-content-->

        @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->

    @include('layoutDashboard.js')

</body>
