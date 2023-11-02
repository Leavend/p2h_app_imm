    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">
                2023 - Indominco Mandiri - General Affairs
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Core theme JS-->
    <script src="{{ url('../js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
        // Tambahkan class "loaded" saat halaman dimuat
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
    </script>

    <script>
        // Tambahkan class "loaded" saat halaman dimuat dan atur waktu delay
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.querySelectorAll('.tabel-manis').forEach(function(element) {
                    element.classList.add('loaded');
                });
            }, 500); // Ubah nilai 500 sesuai dengan waktu delay yang diinginkan (dalam milidetik)
        });

        // Fungsi untuk menutup pesan peringatan
        function closeAlert(alertElement) {
            alertElement.style.display = 'none';
        }
    </script>

    <script>
        // Tambahkan class "loaded" saat halaman dimuat dan atur waktu delay
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.querySelectorAll('.tabel-manis').forEach(function(element) {
                    element.classList.add('loaded');
                });
            }, 500); // Ubah nilai 500 sesuai dengan waktu delay yang diinginkan (dalam milidetik)
        });

        // Fungsi untuk menutup pesan peringatan
        function closeAlert(alertElement) {
            alertElement.style.display = 'none';
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("myForm");
            const nextButton = form.querySelector(".carousel-control-next-2");
            const inputs = form.querySelectorAll("input[required]");

            form.addEventListener("input", function() {
                let formIsValid = true;

                inputs.forEach((input) => {
                    if (input.value.trim() === "") {
                        formIsValid = false;
                    }
                });

                if (formIsValid) {
                    nextButton.removeAttribute("disabled");
                } else {
                    nextButton.setAttribute("disabled", "true");
                }
            });

            form.addEventListener("submit", function(event) {
                if (!nextButton.hasAttribute("disabled")) {
                    // Form is valid, allow submission
                    return;
                } else {
                    event.preventDefault();
                    alert("Isi kolom formulir di atas terlebih dahulu.");
                }
            });
        });
    </script>
