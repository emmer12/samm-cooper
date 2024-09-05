<x-app-layout>
    <x-slot:title>
        Contact Us
    </x-slot>


    <div>
        <x-banner title="Contact us" page="Contact"></x-banner>
    </div>

    <section class="bg-[#fafaff] py-[50px] sm:p-[100px]">
        <div class="container-x">
            <div class="mb-[50px]">
                <div class="">
                    <div class=" text-center">
                        <h6 class="uppercase text-sm">Contact Info</h6>
                        <h2 class="text-[36px] font-bold">Our Contact Information</h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap gap-4 m-auto sm:justify-center justify-start" data-aos="fade-up">
                <div class="flex-1">
                    <div class="bg-white p-4 box-mb ">
                        <div class="box-image flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                        </div>
                        <div class="box-content">
                            <h4>Location:</h4>
                            <span class="text-size-16"> #60 Kwame Nkrumah Crescent, <br /> Asokoro District,<br> Abuja
                                F.C.T.</span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="bg-white p-4 box-mb">
                        <div class="box-image flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Phone:</h4>
                            <span><a href="tel:+23492902686 " class="text-decoration-none text text-size-16">+234 929
                                    02686</span><br>
                            <span><a href="tel:+2347064386315" class="mb-0 text-decoration-none text text-size-16">+234
                                    706 4386315</a></span><br>
                            <span><a href="tel:+2348037450060" class="mb-0 text-decoration-none text text-size-16">+234
                                    803 7450060</a></span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="bg-white p-4 box-mb">
                        <div class="box-image flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                                <path
                                    d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                            </svg>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Email:</h4>
                            <span><a href="mailto:info@sammcooperng.com"
                                    class="text-decoration-none text-size-16">info@sammcooperng.com </a></span><br>
                            {{-- <span><a href="mailto:fortified@gmail.com"
                                    class="mb-0 text-decoration-none text-size-16">fortified@gmail.com</a></span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[70px] sm:p-[100px]" id='contact'>
        <div class="container-x">
            <header class="m-auto text-center mb-5">
                <h2 class="text-[36px] font-bold">Get in touch</h2>
            </header>


            <div class="max-w-[640px] m-auto">
                <form method="POST" action="{{ route('contact-us') }}">
                    @csrf


                    @if (Session::has('message'))
                        <p class="bg-green-100 p-3 {{ Session::get('alert-class', 'alert-info') }}">
                            {{ Session::get('message') }}</p>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-200 p-2 alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br>
                    @endif


                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Full
                                name</label>
                            <input type="text" id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="John Doe" required />
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Phone number</label>
                            <input type="text" id="name" name="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="e.g 09068647444" required />
                        </div>

                        <div>
                            <label name="email" for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Email
                                Address</label>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                placeholder="john.doe@company.com" required />
                        </div>


                        <select id="service" name="service"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                            @foreach ($services as $service)
                                <option selected>Choose Service</option>
                                <option>{{ $service['title'] }}</option>
                            @endforeach
                        </select>


                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Message</label>

                            <textarea name="message" id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                placeholder="Write your thoughts here..."></textarea>
                        </div>


                        <x-primary-button>Submit</x-primary-button>

                </form>
            </div>

        </div>

    </section>


</x-app-layout>
