<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    @stack('styles')
</head>

<body>
    <div class="preloader js-preloader">
        <img src="{{ asset('assets/img/preloader.gif') }}" alt="Image">
    </div>

    <div class="page-wrapper">
        @include('layout.header')
        @include('partials.contact-sidebar')
        @yield('content')

        @include('layout.footer')
    </div>
    @include('partials.lead-modal')
    @include('layout.foot')
    @stack('scripts')

    {{-- ===== Lead Modal JS ===== --}}
    <script>
    (function () {
        var modalEl = document.getElementById('leadModal');
        if (!modalEl) return;

        // Fill hidden source field on modal show
        modalEl.addEventListener('show.bs.modal', function () {
            var src = document.getElementById('leadSource');
            if (src) src.value = window.location.href;
        });

        // Auto-open after 5 seconds (once per session)
        if (!sessionStorage.getItem('leadModalShown')) {
            setTimeout(function () {
                var m = new bootstrap.Modal(modalEl);
                m.show();
                sessionStorage.setItem('leadModalShown', '1');
            }, 5000);
        }

        // Open on any .js-lead-trigger click
        document.querySelectorAll('.js-lead-trigger').forEach(function (el) {
            el.addEventListener('click', function (e) {
                e.preventDefault();
                var m = bootstrap.Modal.getOrCreateInstance(modalEl);
                m.show();
            });
        });

        // AJAX form submission
        var form = document.getElementById('leadModalForm');
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Basic validation
                var valid = true;
                form.querySelectorAll('[required]').forEach(function (f) {
                    if (!f.value.trim()) { f.classList.add('is-invalid'); valid = false; }
                    else { f.classList.remove('is-invalid'); }
                });
                if (!valid) return;

                var btn = document.getElementById('leadSubmitBtn');
                if (btn) { btn.disabled = true; btn.textContent = 'Submitting…'; }

                var formData = new FormData(form);
                fetch('{{ route("lead.store") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]') ?
                            document.querySelector('meta[name="csrf-token"]').getAttribute('content') : ''
                    }
                })
                .then(function (res) { return res.json(); })
                .then(function (data) {
                    if (data.success) {
                        document.getElementById('leadFormWrap').classList.add('d-none');
                        document.getElementById('leadSuccessWrap').classList.remove('d-none');
                        sessionStorage.setItem('leadModalShown', '1');
                    }
                })
                .catch(function () {
                    if (btn) { btn.disabled = false; btn.textContent = 'Submit Enquiry'; }
                    alert('Something went wrong. Please try again.');
                });
            });
        }
    })();
    </script>
    {{-- ===== Lead Modal JS end ===== --}}
</body>

</html>
