@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1  border-indigo-400 text-ls font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  border-transparent text-ls font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<div class="">
    <div class="max-w-7xl m-auto">
        <div class="flex pt-[200px]">
            <div id="svg" class="h-4 w-4 bg-red-500 rounded-full"></div>
            <svg class="ml-5 top-0 absolute" width="764" height="255" viewBox="0 0 700 255" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path id="path" class="hidden" d=" M0.5 132C2.66667 154.333 18.8 194.2 66 175C125 151 144 149 163
                                185.5C182 222 196 293 260 225.5C324 158 304.5 54 441.5 28C578.5 1.99998 536 171.5 664.5 73C767.3
                                -5.80003 771 -4.83334 760 5.50001M760 5.50001L746 37L716.5 5.50001H760Z" stroke="black"
                    stroke-dasharray="2 2" />
            </svg>
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
                    <x-primary-button class=" px-6 py-4 ">
                        Get a Quote
                    </x-primary-button>

                </div>
            </div>
            <div class="w-1/3">
               <div class="anim-h h-0 overflow-hidden">
                <img lazy src="{{ asset('images/img1.jpeg') }}" alt="">
               </div>
            </div>
        </div>
    </div>

    {{-- Social Link --}}
    <div>
        <div class="flex flex-col fixed right-6 bottom-6 gap-3 social">
            <div class="before"></div>
            <a href="https://www.facebook.com/profile.php?id=100069651853930&amp;mibextid=LQQJ4d" class="items b">
              <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d=" M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75
                        7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157
                        1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604
                        6.75-3.934 6.75-7.951z">
                        </path></svg>
                        </a>
                        <a href="https://www.instagram.com/scs_guards/" class="items in">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                </path>
                            </svg>
                        </a>
                        <a href="https://www.threads.net/@scs_guards" class="w-4 h-4">
                            <img src="{{ asset('images/threads.svg') }}" alt="Threads Logo">
                        </a>
                    </div>
                </div>





            </div>



            <script>
                gsap.registerPlugin(MotionPathPlugin)


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

                const tl = gsap.timeline();

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

                tl.to("#svg", {
                    motionPath: {
                        path: "#path",
                    },
                    duration: 5,
                    alignOrigin: [0.5, -0.5],
                })
            </script>
