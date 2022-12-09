<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body>
    <section id="hero" class="w-full bg-center bg-cover">
        @include('partials.navbar')
        <div class="m-auto py-52">
            <h1 class="text-white text-5xl text-center font-montserrat font-extrabold">The Perfect Place to
                Stay <br>
                With Your
                <span class="text-[#9A8AFF]">Family</span>.
            </h1>
            <p class="mt-2 text-center text-lg text-white font-montserrat">Find your comfort with your family with the
                various facilities we provide. <br>
                Because your comfort is the top priority for us.
            </p>
        </div>
    </section>

    @yield('container')
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
