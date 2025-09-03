<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
@include('component.head')
</head>
<body class="bg-[#3E3229]">

    @include('component.header')

    @yield('content')

    @include('component.footer')


{{-- calendy form  --}}
    <script>
        function openModal() {
          document.getElementById('bookingModal').classList.remove('hidden');
          document.getElementById('bookingModal').classList.add('flex');
        }
        function closeModal() {
          document.getElementById('bookingModal').classList.add('hidden');
          document.getElementById('bookingModal').classList.remove('flex');
        }
      </script>
</body>
</html>
