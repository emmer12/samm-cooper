@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1  border-indigo-400 text-ls font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  border-transparent text-ls font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<div class="animation-container">
    <div class="container-x m-auto">
        <div class="flex pt-[100px]">
            <div class="w-2/3 ">
                <h1 class="text-6xl font-bold uppercase anim">Precision. Resilience. <br><span
                        class="gradient-text">Security</span></h1>
                <p class="text-gray-700 anim2">Delivering cutting-edge Defense, IT, and Security Solutions</p>


                <div class="flex gap-6 my-8">
                    <div class="flex-col gap-4 text-center ">
                        <img class="m-auto anim3" src="{{ asset('images/icon3.png') }}" alt="Safty">
                        <p class="anim4 mt-2">Defence </p>
                    </div>
                    <div class="flex-col gap-4 text-center " ">
                        <img class="m-auto anim5" src="{{ asset('images/icon2.png') }}" alt="Protection">
                        <p class="anim6 mt-2" >Information Technology </p>
                    </div>
                    <div class="flex-col gap-4  text-center ">
                        <img class="m-auto anim7 " src="{{ asset('images/icon1.png') }}" alt="Security">
                        <p class="anim8 mt-2">Security </p>
                    </div>
                </div>

                <div class="anim9 ">
                    {{-- <x-primary-button class=" px-6 py-4 ">
                        Get a Quote
                    </x-primary-button> --}}

                </div>
            </div>
            <div class="w-1/3">
               <div class="anim-h h-0 overflow-hidden">
                <img lazy src="{{ asset('images/img2.png') }}" alt="">
               </div>
            </div>
        </div>
    </div>




            </div>



            <script>
                gsap.registerPlugin(MotionPathPlugin)
                gsap.registerPlugin(ScrollTrigger)


                const animations = [{
                        selector: ".anim",
                        x: -50
                    },
                    {
                        selector: ".anim2",
                        x: -50
                    },
                    {
                        selector: ".anim3",
                        rotateY: 90
                    },
                    {
                        selector: ".anim4",
                        y: 20
                    },
                    {
                        selector: ".anim5",
                        rotateY: 90
                    },
                    {
                        selector: ".anim6",
                        y: 20
                    },
                    {
                        selector: ".anim7",
                        rotateY: 90
                    },
                    {
                        selector: ".anim8",
                        y: 20
                    },
                    {
                        selector: ".anim9",
                        y: 20
                    }
                ];

                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".animation-container",
                        start: "top center",
                        end: "bottom bottom",
                        // scrub: true,
                    }
                });

                animations.forEach(anim => {
                    tl.from(anim.selector, {
                        x: anim.x || 0,
                        y: anim.y || 0,
                        rotateY: anim.rotateY || 0,
                        opacity: 0
                    })
                });
                tl.to(".anim-h", {
                    height: 'auto',
                })

                tl.from(".social .before", {
                    opacity: 0,
                    height: '0px'
                })
            </script>
