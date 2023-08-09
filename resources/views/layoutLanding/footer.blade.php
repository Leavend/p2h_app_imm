    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">
                Copyright &copy; 2023 - Indominco Mandiri - General Affairs
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
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
    </script>
