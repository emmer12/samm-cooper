<x-app-layout>
    <x-slot:title>
        Our Services
    </x-slot>


    <div>
        <x-banner title=" Our Services" page="Services"></x-banner>
    </div>


    <section class="bg-[#fafaff]">
        <div class="container-x">
            <div class="max-w-[600px] px-6 py-[50px] m-auto text-center text-xl ">
                <p class="fadeIn">Samm Cooper Security Services system expertise and field experience enables us to apply
                    our
                    <span class="gradient-text">Defense/IT/Security Solutions</span> into virtually any environment -
                    from small businesses to large
                    enterprises.
                </p>
                <p class="fadeIn">By viewing and assessing our clients' requirements carefully, we design, install and
                    maintain cost
                    effect
                    Defense/IT/Security Systems achieve and exceed our clients' prospects.
                </p>
            </div>
        </div>
    </section>

    {{-- <x-about-section></x-about-section> --}}


    <section class="my-[50px] sm:my-[100px]">
        <div class="container-x">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3 mb-3">
                @foreach ($services as $service)
                    <x-service-card title="{{ $service['title'] }}" lead="{{ $service['lead'] }}"
                        imageUrl="{{ $service['images'][0]['url'] }}" slug="{{ $service['slug'] }}"
                        icon="{{ $service['icon'] }}">
                    </x-service-card>
                @endforeach


            </div>


        </div>
    </section>

    <section class="pb-[50px]">



        <div class="max-w-[700px] m-auto">
            <header class="my-6 ">
                <h4 class="text-sm sm:text-base font-semibold tracking-tight  text-primary uppercase mb-2">
                    Application Environment</h4>
                <h2 class="text-3xl sm:text-5xl  font-bold">Secure, integrated, threat-defense setup.</h2>
            </header>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 application">
                <ul class="list-none space-y-2 ">
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Governmental Organizations
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Military Bases and Installations
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Oil and Gas Industries
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Production and Manufacturing Industries
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Hotels
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Traffic Monitoring - Highway | Road | Bridges
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Airports | Seaports
                    </li>
                </ul>
                <ul class="list-none space-y-2">
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Financial Institutions
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Warehouses | Storage Facilities
                    </li>
                    <li class="flex items-center text-sm">
                        <div class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Chemical and Laboratory Facilities
                    </li>
                    <li class="flex items-center text-sm">
                        <div
                            class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Hospitals
                    </li>
                    <li class="flex items-center text-sm">
                        <div
                            class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Small | Medium Scale Businesses
                    </li>
                    <li class="flex items-center">
                        <div
                            class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Residential
                    </li>
                </ul>
            </div>

        </div>
    </section>

    {{-- <section class="py-[50px]">
        <div class="">
            <section>
                <div class="container-x">

                    <div class="grid grid-cols-2  my-[50px] sm:my-[100px]">
                        <div class="px-4 slideIn">
                            <img src={{ asset('/images/img3.JPG') }} alt="Manned Guarding Image">
                        </div>
                        <div class="p-5 slideIn">
                            <h2 class="text-2xl font-bold">Manned Guarding</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est pariatur ut ab rerum,
                                nam expedita repudiandae adipisci dolorum libero ad unde, temporibus ratione beatae esse
                                magnam quis ducimus possimus.</p>
                        </div>
                    </div>
            </section>
        </div>

        <section>
            <div class="container-x">

                <div class="grid grid-cols-2  my-[50px] sm:my-[100px]">

                    <div class="p-5 slideIn">
                        <h2 class="text-2xl font-bold">Monitoring and Security</h2>
                        <p>Samm Cooper Security Services system expertise and field experience enables us to apply our
                            Defense/IT/Security Solutions into virtually any environment - from small businesses to
                            large enterprises.</p>
                        <p>By viewing and assessing our clients' requirements carefully, we design, install and maintain
                            cost effect Defense/IT/Security Systems achieve and exceed our clients' prospects.</p>
                    </div>

                    <div class="px-4 slideIn">
                        <img src={{ asset('/images/img3.JPG') }} alt="Manned Guarding Image">
                    </div>
                </div>
        </section>




        <section>
            <div class="container-x">

                <div class="grid grid-cols-2  my-[50px] sm:my-[100px]">
                    <div class="px-4 slideIn">
                        <img src={{ asset('/images/img3.JPG') }} alt="Manned Guarding Image">
                    </div>
                    <div class="p-5 slideIn">
                        <h2 class="text-2xl font-bold">Risk Management assessment</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est pariatur ut ab rerum,
                            nam expedita repudiandae adipisci dolorum libero ad unde, temporibus ratione beatae esse
                            magnam quis ducimus possimus.</p>
                    </div>
                </div>
        </section>

        <section>
            <div class="container-x">
                <div class="grid grid-cols-2  my-[50px] sm:my-[100px]">

                    <div class="p-5 slideIn">
                        <h2 class="text-2xl font-bold">Executive protetion excor</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est pariatur ut ab rerum,
                            nam expedita repudiandae adipisci dolorum libero ad unde, temporibus ratione beatae esse
                            magnam quis ducimus possimus.</p>
                    </div>

                    <div class="px-4 slideIn">
                        <img src={{ asset('/images/img3.JPG') }} alt="Manned Guarding Image">
                    </div>
                </div>
        </section>





        <section>
            <div class="container-x">

                <div class="grid grid-cols-2 slideIn my-[50px] sm:my-[100px]">
                    <div class="px-4 slideIn">
                        <img src={{ asset('/images/img3.JPG') }} alt="Manned Guarding Image">
                    </div>
                    <div class="p-5 slideIn">
                        <h2 class="text-2xl font-bold">Security Technology</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est pariatur ut ab rerum,
                            nam expedita repudiandae adipisci dolorum libero ad unde, temporibus ratione beatae esse
                            magnam quis ducimus possimus.</p>
                    </div>
                </div>
        </section>
        </div>
    </section>


 --}}


    <script>
        gsap.registerPlugin(ScrollTrigger)


        // gsap.from(".header", {
        //     scrollTrigger: {
        //         trigger: ".header",
        //     },
        //     autoAlpha: 0,
        // });

        ScrollTrigger.batch(".card-animation", {
            onEnter: elements => {
                gsap.from(elements, {
                    autoAlpha: 0,
                    y: 60,
                    stagger: 0.15,
                    delay: 0.5,
                });
            },
            once: true,
        });

        ScrollTrigger.batch(".application li", {
            onEnter: elements => {
                gsap.from(elements, {
                    autoAlpha: 0,
                    x: 10,
                    stagger: 0.15,
                    delay: 0.5,
                });
            },
            once: true,
        });
    </script>

</x-app-layout>
