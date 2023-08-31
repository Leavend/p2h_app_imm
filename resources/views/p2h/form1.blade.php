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
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama_pemeriksa">
                        </div>
                        <!-- Tambahkan elemen-elemen lainnya di sini -->

                        <!-- Tombol untuk menyimpan perubahan -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>

            </div>

        </div>
    </section>

    <!-- footer -->
    @include('layoutLanding.footer')
</body>
