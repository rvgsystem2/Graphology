<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('component.head')

</head>
<body class="bg-[#3E3229]">
@if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3085d6',
            });
        });
    </script>
@endif
{{-- ❌ Error Messages --}}
@if($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonColor: '#d33',
            });
        });
    </script>
@endif

    @include('component.header')

    @yield('content')

    @include('component.footer')


{{-- calendy form  --}}

<script>
    function openCalendly() {
      Calendly.initPopupWidget({
        url: 'https://calendly.com/shivanshdargarhlts/30min?month=2025-09'
      });
      return false; // Prevent page navigation
    }
  </script>

    <!-- Calendly Popup Widget JS (required for initPopupWidget) -->
    <script src="https://assets.calendly.com/assets/external/widget.js" async></script>

    <script>
        // Put function on window to ensure global access from inline onclick
        window.openCalendly = function () {
            // 1) Show SweetAlert confirmation
            Swal.fire({
                title: 'Book Appointment?',
                text: 'Do you want to open the Calendly booking form?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, open it',
                cancelButtonText: 'Not now',
                confirmButtonColor: '#2563eb'
            }).then((result) => {
                if (result.isConfirmed) {
                    // 2) Open Calendly popup
                    if (window.Calendly && Calendly.initPopupWidget) {
                        Calendly.initPopupWidget({
                            url: 'https://calendly.com/shivanshdargarhlts/30min?month=2025-09'
                        });
                    } else {
                        // Fallback if Calendly JS didn't load yet
                        Swal.fire('Oops!', 'Calendly script not loaded. Please try again in a moment.', 'error');
                    }
                }
            });
            return false; // prevent navigation if used on <a>
        };
    </script>
</body>
</html>
