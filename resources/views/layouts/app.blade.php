<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/EasePack.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.2/MotionPathPlugin.js"></script>


    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen ">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @if (request()->route()->getName() != 'home')
            <x-footer></x-footer>
        @endif
    </div>




    <script>
        gsap.registerPlugin(ScrollTrigger)

        gsap.utils.toArray(".fadeIn").forEach((section, i) => {
            gsap.from(section, {
                scrollTrigger: {
                    trigger: section,
                    start: "top bottom",
                },
                delay: i * 0.5,
                autoAlpha: 0
            });
        });

        gsap.utils.toArray(".slideIn").forEach((section, i) => {
            gsap.from(section, {
                scrollTrigger: {
                    trigger: section,
                    start: "center bottom",
                },
                y: 100,
                autoAlpha: 0

            });
        });




        gsap.utils.toArray(".image-slide-down").forEach((section, i) => {
            gsap.to(section, {
                scrollTrigger: {
                    trigger: section,
                    start: "top center",
                },
                delay: i * 0.5,
                height: 'auto',
            });
        });
    </script>
</body>

</html>
