<x-app-layout>
    <x-slot:title>
        About Us
    </x-slot>


    <div>
        <x-banner title="About us" page="About"></x-banner>
    </div>

    <section>
        <div class="container-x py-[50px] ">

            <div class="flex flex-col sm:flex-row sm:w-[70%] m-auto  gap-[40px]">
                <div class="flex-1">
                    <header class=" mb-4">
                        <span class="uppercase text-sm trigger">About Us</span>
                        {{-- <h1 class="text-[36px] font-bold"></h1> --}}
                    </header>

                    <div class="text-base fadeIn">
                        <h2 class="font-semibold gradient-text text-3xl ">Precision is Our Watchword; Resilience is
                            Our
                            Virtue
                        </h2>
                        <p class="text-[#7c7c7c] ">
                            Samm Cooper Security Services Limited is a fast growing Defense, IT and Security Solutions
                            firm
                            offering customized, enterprise and supported solutions to all establishments which include
                            large- scale, governmental, small-medium scale and even start-up firms.
                        </p>
                        <p class="text-[#7c7c7c] ">By forging alliances with top vendors and equipment
                            manufacturers, and
                            investing strongly in
                            our
                            workforce, Samm Cooper Security Services Limited is able to provide solutions that integrate
                            the
                            best technology and security options that support purchase and implementation decisions.
                        </p>
                        <p class="text-[#7c7c7c] ">Our satisfied serviced clients depends on us for best-of-breed
                            systems, engineering
                            integration,
                            training and support. With our propriety SCS® methodology, we are able to provide our
                            clients
                            with a customized backend provisioning and maintenance for the enterprise.
                        </p>
                    </div>
                </div>
                <div class=" display w-full flex-1 overflow-clip ">
                    <div class="image-slide-down h-0 overflow-hidden origin-top">
                        <img lazy src="{{ asset('images/img1.jpeg') }}" />
                    </div>
                </div>
            </div>



        </div>
    </section>


    {{-- 
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
    </section> --}}


    <section class="sm:py-[100px] py-[50px] fadeIn bg-[#fafaff]">
        <div class="container-x">
            <div class="sm:w-[720px] m-auto text-center">
                <h4 class="text-sm sm:text-base font-semibold tracking-tight  text-primary uppercase mb-2">
                    The Future</h4>
                <h2 class="text-3xl sm:text-5xl font-bold tracking-tighter mb-3 gradient-text">A message fro our
                    director
                </h2>


                <p class="text-lg text-gray">
                    <img class="inline-block skew-x-2 rotate-y " src={{ asset('/images/quote-img.png') }}
                        alt="Quote">
                    Samm Cooper Security Services Limited is very optimistic and will continue to grow as a valued
                    organization in the West African Sub-region.
                    Partnering with some of the worldwide leaders and manufacturers of Defense, IT and Security Systems,
                    we foresee an incredible growth and success in this field.
                    In the current point in our history, it is the attitude and commitment of our staff at Samm Cooper
                    Security Services that enables us to cope and adapt to various developments and to be recognized as
                    a major force within the Defense/IT/Security Industry.
                    <img class="inline-block" src={{ asset('/images/quote-img.png') }} alt="Quote">

                </p>
            </div>

        </div>
    </section>


    <section class="py-[100px]">
        <div class="container-x">
            <header>
                <h2 class="text-sm sm:text-base font-semibold tracking-tight  text-primary uppercase mb-2">Our Strategic
                    Partners
                </h2>
            </header>
        </div>


        <div class=" mt-[50px] w-full overflow-x-hidden">
            <div class="mq flex p-2 w-[300%]" id="mq">
                <div id="mq-content" class=" flex w-full items-center">
                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b0.webp') }} alt="panasonic">
                    </div>
                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b1.webp') }} alt="panasonic">
                    </div>

                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b2.jpg') }} alt="panasonic">
                    </div>
                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b3.png') }} alt="panasonic">
                    </div>

                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b4.png') }} alt="panasonic">
                    </div>
                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b5.png') }} alt="panasonic">
                    </div>
                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b6.png') }} alt="panasonic">
                    </div>
                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b7.png') }} alt="panasonic">
                    </div>
                    <div class=" max-w-[300px] px-5">
                        <img src={{ asset('images/brands/b8.png') }} alt="panasonic">
                    </div>
                </div>



            </div>

        </div>
    </section>




    <script>
        const mq = document.querySelector('#mq')
        const content = document.querySelector('#mq-content')
        const c = content.cloneNode(true)
        mq.append(c)

        const distance = -1 * c.clientWidth;

        gsap.fromTo(
            mq.children, {
                x: 0
            }, {
                x: distance,
                duration: 20,
                ease: 'none',
                repeat: -1
            }
        )


        // console.log(c.clientWidth);
    </script>

</x-app-layout>
