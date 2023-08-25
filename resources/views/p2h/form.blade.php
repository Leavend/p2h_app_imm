@include('layoutLanding.header')

<body id="page-top">

    @include('layoutLanding.navbar')

    <header class="formulir">
        <div class="container-sm px-4 px-lg-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="">
                    <div class="card bg-glass mb-3">
                        <div class="row g-0 mb-3">
                            <div class="">
                                <form id="regForm" action="">
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <div class="card-body p-md-3 mx-md-4">
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

                    <div class="tab">
                      <div class="card-body p-md-3 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">
                            Oli dan Radiator
                          </h4>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Oil Mesin</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row1"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row1"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Oli Kopling</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row2"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row2"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Air Radiator</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row3">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row3"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row3"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Oli Stering</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row4">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row4"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row4"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row4"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      <div class="card-body p-md-3 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">Rem</h4>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Rem Depan/Belakang</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions2"
                              id="inlineRadio1_row2"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row2"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions2"
                              id="inlineRadio2_row2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions2"
                              id="inlineRadio3_row2"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row2"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Rem Tangan</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions2"
                              id="inlineRadio1_row2"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row2"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions2"
                              id="inlineRadio2_row2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions2"
                              id="inlineRadio3_row2"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row2"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      <div class="card-body p-md-5 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">Lampu</h4>
                        </div>

                        <!-- Card -->
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Jauh/Dekat</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row1"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row1"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Reting R/L</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row2"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row2"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Rem</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row3">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row3"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row3"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Mundur</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row4">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row4"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row4"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row4"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Rotari</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row5">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row5"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row5"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row5"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      <div class="card-body p-md-5 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">Roda</h4>
                        </div>

                        <!-- Card -->
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Depan/Belakang</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio1_row1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio2_row1"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label
                              class="form-check-label"
                              for="inlineRadio3_row1"
                              >Tidak ada</label
                            >
                          </div>
                        </div>

                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Cadangan</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      <div class="card-body p-md-5 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">Body</h4>
                        </div>

                        <!-- Card -->
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Fender R/L</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Pintu R/L</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Atap Kabin</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row3">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Bendera</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row4">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Karet Mounting</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row5">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Sepring</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row6">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      <div class="card-body p-md-5 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">Tools</h4>
                        </div>

                        <!-- Card -->
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Dongkrak Aksesoris</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Kunci Roda</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Segitiga Pengaman</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row3">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Ganjal Ban</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row4">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      <div class="card-body p-md-5 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">Tools</h4>
                        </div>

                        <!-- Card -->
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Dongkrak Aksesoris</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Kunci Roda</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Segitiga Pengaman</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row3">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>Ganjal Ban</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row4">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      <div class="card-body p-md-5 mx-md-4">
                        <div class="">
                          <img
                            src="/assets/img/IMM.svg"
                            style="width: 90px"
                            alt="logo"
                          />
                          <h4 class="mt-1 pt-2 text-center">Surat</h4>
                        </div>

                        <!-- Card -->
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>P3K</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row1">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                        <div class="mx-0 mx-sm-auto">
                          <div class="text">
                            <p>STNP & KIR</p>
                          </div>
                        </div>
                        <div class="text-center mb-3" id="inlineRadio1_row2">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >Baik</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >Rusak</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio3"
                              >Tidak ada</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab">
                      Login Info:
                      <p>
                        <input
                          placeholder="Username..."
                          oninput="this.className = ''"
                        />
                      </p>
                      <p>
                        <input
                          placeholder="Password..."
                          oninput="this.className = ''"
                        />
                      </p>
                    </div>

                    <div style="overflow: auto">
                      <div style="float: right">
                        <button
                          type="button"
                          id="prevBtn"
                          onclick="nextPrev(-1)"
                        >
                          Previous
                        </button>
                        <button
                          type="button"
                          id="nextBtn"
                          onclick="nextPrev(1)"
                        >
                          Next
                        </button>
                      </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align: center; margin-top: 40px">
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('myForm');
            const nextButton = form.querySelector('.carousel-control-next-2');
            const inputs = form.querySelectorAll('input[required]');

            form.addEventListener('input', function() {
                let formIsValid = true;

                inputs.forEach(input => {
                    if (input.value.trim() === '') {
                        formIsValid = false;
                    }
                });

                if (formIsValid) {
                    nextButton.removeAttribute('disabled');
                } else {
                    nextButton.setAttribute('disabled', 'true');
                }
            });

            form.addEventListener('submit', function(event) {
                if (!nextButton.hasAttribute('disabled')) {
                    // Form is valid, allow submission
                    return;
                } else {
                    event.preventDefault();
                    alert('Isi kolom formulir di atas terlebih dahulu.');
                }
            });
        });
    </script>

</body>
