@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">

            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">

                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Daftar User</h1>
                    </div>

                    <div class="col-auto">
                        @include('_messagesdash')
                    </div>

                    <div class="col-auto">

                        <div class="page-utilities">

                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                                <div class="col-auto">

                                    <form class="table-search-form row gx-1 align-items-center">

                                        <div class="col-auto">
                                            <input type="text" id="name" value="{{ Request::get('name') }}"
                                                name="name" class="form-control search-orders"
                                                placeholder="Cari user dari Nama">
                                        </div>

                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Cari</button>
                                        </div>

                                        <div class="col-auto">
                                            <a href="{{ route('user.list') }}" class="btn app-btn-secondary">Clear</a>
                                        </div>

                                    </form>

                                </div><!--//col-->

                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="{{ route('user.add') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                            viewBox="0 0 22 22" id="add-playlist" class="bi bi-download me-1">
                                            <path
                                                d="M13 10H3c-.55 0-1 .45-1 1s.45 1 1 1h10c.55 0 1-.45 1-1s-.45-1-1-1zm0-4H3c-.55 0-1 .45-1 1s.45 1 1 1h10c.55 0 1-.45 1-1s-.45-1-1-1zm5 8v-3c0-.55-.45-1-1-1s-1 .45-1 1v3h-3c-.55 0-1 .45-1 1s.45 1 1 1h3v3c0 .55.45 1 1 1s1-.45 1-1v-3h3c.55 0 1-.45 1-1s-.45-1-1-1h-3zM3 16h6c.55 0 1-.45 1-1s-.45-1-1-1H3c-.55 0-1 .45-1 1s.45 1 1 1z">
                                            </path>
                                        </svg>
                                        Tambah User
                                    </a>
                                </div>

                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="{{ route('user.download.csv') }}">
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

                <div class="tab-content" id="orders-table-tab-content">

                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">

                        <div class="app-card app-card-orders-table shadow-sm mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Username</th>
                                                <th class="cell">Nama</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">No HP</th>
                                                <th class="cell">Tanggal Pembuatan</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $dataExist = false; ?>
                                            @foreach ($User as $x)
                                                <tr>
                                                    <?php $dataExist = true; ?>
                                                    {{-- <td class="cell">{{ ++$no }}</td> --}}
                                                    <td>{{ $User->firstItem() + $loop->index }}</td>
                                                    <td class="cell">{{ $x->username }}</td>
                                                    <td class="cell">{{ $x->name }}</td>
                                                    <td class="cell">{{ $x->email }}</td>
                                                    <td class="cell">{{ $x->no_hp }}</td>
                                                    <td class="cell">
                                                        <span>{{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('d M Y') }}</span>
                                                        <span
                                                            class="note">{{ \Carbon\Carbon::parse($x->Created_at, 'Asia/Makassar')->format('g:i A') }}</span>
                                                    </td>
                                                    <td class="cell">
                                                        <a href="{{ url('admin/user/edit/' . $x->id) }}"
                                                            class="btn btn-circle btn-warning"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="{{ url('admin/user/hapus/' . $x->id) }}"
                                                            class="btn btn-circle btn-danger"
                                                            data-name="{{ $x->name }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">Data
                                                        Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->


                        <nav class="app-pagination" id="user-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $User->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $User->url($User->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $User->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $User->lastPage(); $i++)
                                    <li class="page-item {{ $User->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $User->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li
                                    class="page-item {{ $User->currentPage() == $User->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $User->url($User->currentPage() + 1) }}">Next</a>
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
