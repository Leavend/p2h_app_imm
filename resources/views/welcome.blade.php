@include('layoutLanding.header')

<body id="page-top">


    @include('layoutLanding.navbar')


    @include('layoutLanding.hero')


    <!-- Display P2H & Kendaraan -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="kendaraan">
                <div class="container px-4 px-lg-5">
                    <h3 class="text-center mt-0">Daftar P2H Hari Ini</h3>
                    <hr class="divider divider-light" />
                    <section class="table__header">
                        {{-- <div class="input-group">
                            <input type="search" placeholder="Search Data..." />
                        </div> --}}
                        {{-- <div class="export__file">
                            <label for="export-file" class="export__file-btn" title="Export File"></label>
                            <input type="checkbox" id="export-file" />
                            <div class="export__file-options">
                                <label>Export As &nbsp; &#10140;</label>
                                <label for="export-file" id="toPDF">PDF <img src="images/pdf.png"
                                        alt="" /></label>
                                <label for="export-file" id="toJSON">JSON <img src="images/json.png"
                                        alt="" /></label>
                                <label for="export-file" id="toCSV">CSV <img src="images/csv.png"
                                        alt="" /></label>
                                <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png"
                                        alt="" /></label>
                            </div>
                        </div> --}}
                    </section>
                    <section class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>No Lambung</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($p2hToday as $x)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $x->kendaraan->jenis_kendaraan }}</td>
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
                                            {{ \Carbon\Carbon::parse($x->kendaraan->created_at, 'Asia/Makassar')->format('d M Y ') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="padding: 20px; float: right">
                            {{ $All->links() }}
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section px-4" id="services">
                <div class="container px-4 px-lg-5">
                    <h3 class="text-center mt-0">Daftar Kendaraan</h3>
                    <hr class="divider divider-light" />
                    <section class="table__header">
                        {{-- <div class="input-group">
                            <input type="search" placeholder="Search Data..." />
                        </div>
                        <div class="export__file">
                            <label for="export-file" class="export__file-btn" title="Export File"></label>
                            <input type="checkbox" id="export-file" />
                            <div class="export__file-options">
                                <label>Export As &nbsp; &#10140;</label>
                                <label for="export-file" id="toPDF">PDF <img src="images/pdf.png"
                                        alt="" /></label>
                                <label for="export-file" id="toJSON">JSON <img src="images/json.png"
                                        alt="" /></label>
                                <label for="export-file" id="toCSV">CSV <img src="images/csv.png"
                                        alt="" /></label>
                                <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png"
                                        alt="" /></label>
                            </div>
                        </div> --}}
                    </section>
                    <section class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>No Lambung</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $No = 1; ?>
                                @foreach ($kendaraanData as $x)
                                    <tr>
                                        <td>{{ $No++ }}</td>
                                        <td>{{ $x->jenis_kendaraan }}</td>
                                        <td>{{ $x->nomor_lambung }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($x->created_at, 'Asia/Makassar')->format('d M Y ') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="pagination">
                            {{ $kendaraanData->links() }}
                        </div> --}}
                    </section>
                </div>
            </section>
        </main>
    </div>

    <div class="tabel-manis">
      <main class="table">
        <section class="page-section px-4" id="services">
          <div class="container px-4 px-lg-5">
            <div class="container">
              <h2 class="text-center">Daftar Kendaraan</h2>
              <h4>Select Number Of Rows</h4>
              <div class="form-group">
          <!-- Show Numbers Of Rows-->
                  <select class="form-control" name="state" id="maxRows">
                      <option value="5000">Show ALL Rows</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                  </select>
              </div>
              <table class="table table-striped table-class" id="table-id">
                  <tbody>
                      <tr>
                          <th>Row</th>
                          <th>1</td>
                          <th>2</td>
                          <th>3</td>
                      </tr>
                      <tr>
                          <td>First Name</th>
                          <td>John</td>
                          <td>Peter</td>
                          <td>John</td>
                      </tr>
                      <tr>
                          <td>Last Name</th>
                          <td>Carter</td>
                          <td>Parker</td>
                          <td>Rambo</td>
                      </tr>
                      <tr>
                          <td>Email</th>
                          <td>johncarter@mail.com</td>
                          <td>peterparker@mail.com</td>
                          <td>johnrambo@mail.com</td>
                      </tr>
                      <tr>
                          <td>Row</th>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                      </tr>
                      <tr>
                          <td>First Name</th>
                          <td>John</td>
                          <td>Peter</td>
                          <td>John</td>
                      </tr>
                      <tr>
                          <td>Last Name</th>
                          <td>Carter</td>
                          <td>Parker</td>
                          <td>Rambo</td>
                      </tr>
                      <tr>
                          <td>Email</th>
                          <td>johncarter@mail.com</td>
                          <td>peterparker@mail.com</td>
                          <td>johnrambo@mail.com</td>
                      </tr>
                      <tr>
                          <td>Row</th>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                      </tr>
                      <tr>
                          <td>First Name</th>
                          <td>John</td>
                          <td>Peter</td>
                          <td>John</td>
                      </tr>
                      <tr>
                          <td>Last Name</th>
                          <td>Carter</td>
                          <td>Parker</td>
                          <td>Rambo</td>
                      </tr>
                      <tr>
                          <td>Email</th>
                          <td>johncarter@mail.com</td>
                          <td>peterparker@mail.com</td>
                          <td>johnrambo@mail.com</td>
                      </tr>
                      <tr>
                          <td>Row</th>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                      </tr>
                      <tr>
                          <td>First Name</th>
                          <td>John</td>
                          <td>Peter</td>
                          <td>John</td>
                      </tr>
                      <tr>
                          <td>Last Name</th>
                          <td>Carter</td>
                          <td>Parker</td>
                          <td>Rambo</td>
                      </tr>
                      <tr>
                          <td>Email</th>
                          <td>johncarter@mail.com</td>
                          <td>peterparker@mail.com</td>
                          <td>johnrambo@mail.com</td>
                      </tr>
                  </tbody>
          
              </table>
          <!-- Start Pagination -->
              <div class='pagination-container'>
                  <nav>
                      <ul class="pagination">
                          <li data-page="prev">
                              <span> <
                                  <span class="sr-only">(current)
                              </span></span>
                          </li>
          <!-- Here the JS Function Will Add the Rows -->
                          <li data-page="next" id="prev">
                              <span> > <span class="sr-only">(current)</span></span>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
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
