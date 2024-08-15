<x-app-layout>
    <x-slot:title>
        About Us
    </x-slot>


    <div>
        <x-banner title="About us" page="About"></x-banner>
    </div>

    <section>
        <div class="container-x py-[50px]">

            <div class="flex flex-col sm:flex-row sm:w-[70%] m-auto items-center gap-[40px]">
                <div class="flex-1">
                    <header class=" mb-4">
                        <span class="uppercase text-sm">About Us</span>
                        {{-- <h1 class="text-[36px] font-bold"></h1> --}}
                    </header>

                    <div class="text-base">
                        <h2 class="font-semibold gradient-text text-3xl">Precision is Our Watchword; Resilience is Our
                            Virtue
                        </h2>
                        <p class="text-[#7c7c7c]">
                            Samm Cooper Security Services Limited is a fast growing Defense, IT and Security Solutions
                            firm
                            offering customized, enterprise and supported solutions to all establishments which include
                            large- scale, governmental, small-medium scale and even start-up firms.
                        </p>
                        <p class="text-[#7c7c7c]">By forging alliances with top vendors and equipment manufacturers, and
                            investing strongly in
                            our
                            workforce, Samm Cooper Security Services Limited is able to provide solutions that integrate
                            the
                            best technology and security options that support purchase and implementation decisions.
                        </p>
                        <p class="text-[#7c7c7c]">Our satisfied serviced clients depends on us for best-of-breed
                            systems, engineering
                            integration,
                            training and support. With our propriety SCS® methodology, we are able to provide our
                            clients
                            with a customized backend provisioning and maintenance for the enterprise.
                        </p>
                    </div>
                </div>
                <div class=" display w-full flex-1 overflow-clip ">
                    <img src="{{ asset('images/img1.jpeg') }}" />
                </div>
            </div>



        </div>


    </section>

    <section class="sm:py-[100px] py-[50px] fadeIn">
        <div class="container-x">
            <div class="flex flex-col-reverse sm:flex-row gap-x-[60px] gap-y-5 items-center ">
                <div class="w-full sm:w-1/2 ">
                    <h4 class="text-sm sm:text-base font-semibold tracking-tight  text-primary uppercase mb-2">
                        Our Vision</h4>
                    <h2 class="text-3xl sm:text-5xl font-bold tracking-tighter mb-3">We provide high quality services
                    </h2>
                    <p class="text-lg ">
                        Empower viewers with a diverse and immersive TV experience, offering captivating content that
                        entertains, informs, and inspires.
                    </p>

                    <a href="{{ route('contact') }}" class="btn primary mt-3">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="sm:py-[100px] py-[50px] fadeIn">
        <div class="container-x">
            <div class="sm:w-[600px] m-auto text-center">
                <h4 class="text-sm sm:text-base font-semibold tracking-tight  text-primary uppercase mb-2">
                    Our Mission</h4>
                <h2 class="text-3xl sm:text-5xl font-bold tracking-tighter mb-3">We provide high quality services
                </h2>
                <p class="text-lg ">
                    Empower viewers with a diverse and immersive TV experience, offering captivating content that
                    entertains, informs, and inspires.
                </p>
            </div>


            <div class=" items-center my-4 ">
                <div class="display m-auto w-full sm:w-1/2  rounded-3xl overflow-clip ">
                    <img src="{{ asset('images/img2.jpeg') }}" />
                </div>

            </div>
        </div>
    </section>

    <x-about-section></x-about-section>


</x-app-layout>
