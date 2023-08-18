<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ url('../assetsDashboard/plugins/popper.min.js') }}"></script>
<script src="{{ url('../assetsDashboard/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('../assetsDashboard/js/app.js') }}"></script>
{{-- <script src="path_to_your_script.js"></script> --}}

<script>
    // Apply filter when either form is submitted
    const filterFormNoLambung = document.getElementById('filterFormNoLambung');
    const filterFormDate = document.getElementById('filterFormDate');

    filterFormNoLambung.addEventListener('submit', function(event) {
        event.preventDefault();
        applyFilter();
    });

    filterFormDate.addEventListener('submit', function(event) {
        event.preventDefault();
        applyFilter();
    });

    function applyFilter() {
        const noLambung = document.getElementById('no_lambung').value;
        const date = document.getElementById('date').value;

        const searchParams = new URLSearchParams();
        searchParams.set('no_lambung', noLambung);
        searchParams.set('date', date);

        const currentURL = new URL(window.location.href);
        currentURL.search = searchParams.toString();

        window.location.href = currentURL.toString();
    }

    // Nav Link Responsive
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(navLink => {
        navLink.addEventListener('click', (event) => {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            navLink.classList.add('active');
        });
    });

    $(document).ready(function() {
        $('.edit-user').click(function() {
            var userId = $(this).data('id');
            $.ajax({
                url: '{{ route('ajax.get.user') }}',
                method: 'POST',
                data: {
                    id: userId
                },
                success: function(response) {
                    var user = JSON.parse(response);
                    var form = `
                        <form action="{{ route('user.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="${user.id}">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="${user.name}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="${user.email}" required>
                            </div>
                            <!-- Tambahkan input untuk field lainnya -->
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    `;
                    $('#editModal .modal-body #editUserForm').html(form);
                    $('#editModal').modal('show'); // Menampilkan modal edit
                },
                error: function() {
                    alert('Terjadi kesalahan saat mengambil data pengguna.');
                }
            });
        });
    });
</script>
