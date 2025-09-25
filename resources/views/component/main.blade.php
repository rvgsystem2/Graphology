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
    function openCalendly() {
      Calendly.initPopupWidget({
        url: 'https://calendly.com/shivanshdargarhlts/30min?month=2025-09'
      });
      return false; // Prevent page navigation
    }
  </script>
</body>
</html>
