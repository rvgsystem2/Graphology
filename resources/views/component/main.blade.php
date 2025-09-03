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
        url: 'https://calendly.com/kakurr2018/30min?primary_color=3c8542'
      });
      return false; // Prevent page navigation
    }
  </script>
</body>
</html>
