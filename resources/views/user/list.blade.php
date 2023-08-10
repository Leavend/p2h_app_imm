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
                                    <a class="btn app-btn-secondary" href="{{ route('download.csv') }}">
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


                {{-- <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-lg flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                        href="#orders-pending" role="tab" aria-controls="orders-pending"
                        aria-selected="false">Pending</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
                        aria-selected="false">Cancelled</a>
                </nav> --}}


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
                                                <th class="cell">Tanggal Pembuatan</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @foreach ($User as $x)
                                                <tr>
                                                    <?php $dataExist = true; ?>
                                                    <td class="cell">{{ ++$no }}</td>
                                                    <td class="cell">{{ $x->username }}</td>
                                                    <td class="cell">{{ $x->name }}</td>
                                                    <td class="cell">
                                                        <span>{{ $x->created_at->format('d M') }}</span>
                                                        <span
                                                            class="note">{{ $x->created_at->format('g:i A') }}</span>
                                                    </td>
                                                    <td class="cell">
                                                        <a href="{{ url('admin/user/edit/' . $x->id) }}"
                                                            class="btn btn-circle btn-warning"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="{{ url('admin/user/hapus/' . $x->id) }}"
                                                            class="btn btn-circle btn-danger"><i
                                                                class="fas fa-trash-alt"></i></a>
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

                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav><!--//app-pagination-->

                    </div><!--//tab-pane-->


                </div><!--//tab-content-->



            </div><!--//container-fluid-->

        </div><!--//app-content-->

        @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->


    @include('layoutDashboard.js')

</body>
