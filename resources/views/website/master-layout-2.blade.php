<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>

    @yield('assests')

    @stack('head-scripts')

    <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-WXX55SRG0Q"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-WXX55SRG0Q');
   </script>

</head>
<body>
    <div class="calculator-container">

        @yield('client-calculator')

        @yield('pro-calculator')

    </div>

    @stack('scripts')

</body>
</html>
