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
                    Defense/IT/Security Solutions into virtually any environment - from small businesses to large
                    enterprises.</p>
                <p class="fadeIn">By viewing and assessing our clients' requirements carefully, we design, install and
                    maintain cost
                    effect
                    Defense/IT/Security Systems achieve and exceed our clients' prospects.
                </p>
            </div>
        </div>
    </section>

    {{-- <x-about-section></x-about-section> --}}


    <section class="my-[100px]">
        <div class="container-x">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3 mb-3">
                <x-service-card title="Surveillance - [CCTV]"
                    description="At Samm Cooper Security Services our Hybrid Closed Circuit Television (CCTV) Systems are designed specially for each application to target unique requirements."
                    imageUrl="{{ asset('images/img4.jpg') }}" link="/" icon="cctv-camera.svg">
                </x-service-card>
                <x-service-card title="Access Control Systems"
                    description="Bollards An access control system protects your hard-earned investment by protecting your business from theft and dangerous intruders. "
                    imageUrl="{{ asset('images/img4.jpg') }}" link="/" icon="door.svg">
                </x-service-card>
                <x-service-card title="Perimeter Security Systems"
                    description="Samm Cooper Security Services perimeter security system ensures safeguarding of the approach ways to an industrial facility or a privately owned parcel of land and is the first line of defense for an object."
                    imageUrl="{{ asset('images/img4.jpg') }}" link="/" icon="underground.svg">
                </x-service-card>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
                <x-service-card title="Fire Fighting System & Equipments"
                    description="Samm Cooper Security Services supplies effective fire fighting systems for buildings of all sizes and types. We will customize all fire fighting systems so that they provide your property with the highest level of fire protection."
                    imageUrl="{{ asset('images/img4.jpg') }}" link="/" icon="fire-extinguisher.svg">
                </x-service-card>
                <x-service-card title="EmergencyResponse |CallCenterSolutions"
                    description="At Samm Cooper Security Services, we pioneer innovative ideas that are crucial to the government as well as for the develop- ment of the standard of living of the general public."
                    imageUrl="{{ asset('images/img4.jpg') }}" link="/" icon="call-center.svg">
                </x-service-card>
                <x-service-card title="SCS Guards"
                    description="Samm Cooper Security Services provides armed/unarmed guards. Ideally suited for deployment at strategic and sensitive locations, they are trained and equipped to perform key security functions."
                    imageUrl="{{ asset('images/img4.jpg') }}" link="/" icon="bodyguard.svg">
                </x-service-card>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <ul class="list-none space-y-2">
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
                        <div
                            class="w-6 h-6 flex items-center justify-center rounded-full bg-red-200 text-red-800 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </div>
                        Financial Institutions
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
                        Warehouses | Storage Facilities
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

                    <div class="grid grid-cols-2  my-[100px]">
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

                <div class="grid grid-cols-2  my-[100px]">

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

                <div class="grid grid-cols-2  my-[100px]">
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
                <div class="grid grid-cols-2  my-[100px]">

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

                <div class="grid grid-cols-2 slideIn my-[100px]">
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

</x-app-layout>
