<x-app-layout>
    <link rel="stylesheet" type="text/css" href="/css/highslide.css" />
    <x-slot:title>
        Surveillance - [CCTV]
    </x-slot>


    <div>
        <x-banner title="Surveillance - [CCTV]" page="Surveillance - [CCTV]" middleText="Services"
            middleLink="{{ route('services') }}"></x-banner>
    </div>

    <section class="bg-[#fafaff] py-[100px]">
        <div class="container-x">
            {{-- <div class="mb-[50px]">
                <div class="">
                    <div class=" text-center fadeIn">
                        <h6 class="uppercase text-sm">Contact Info</h6>
                        <h2 class="text-[36px] font-bold">Our Contact Information</h2>
                    </div>
                </div>
            </div> --}}
            <div class="max-w-[640px] m-auto text-[#7c7c7c] fadeIn">
                <p class=" ">
                    At Samm Cooper Security Services our Hybrid Closed Circuit Television (CCTV) Systems are designed
                    specially for each application to target unique requirements.
                </p>
                <p>Therefore a broad range of cameras, recording servers and transmission options are available to best
                    suit a clients' specific needs.</p>
                <p>Cameras can include facilities to pan, tilt or zoom into target objects. Units can be selected to
                    operate in various environments, indoors or outdoors, from high light situations to use of infra-red
                    or thermal cameras for operating at night times even in complete darkness.</p>
            </div>
        </div>
    </section>

    <section class="my-[100px]">
        <div class="container-x">
            <div class=" max-w-[900px] m-auto">
                <header>
                    <h2 class="gradient-text text-xl font-bold">CCD Cameras
                        Dome Cameras
                        Pinhole | Hidden Cameras Infra-red Cameras IP-Based Cameras Wireless Cameras
                        Speed Cameras</h2>
                </header>
                <br>
                <div class="grid grid-cols-3 highslide-gallery gap-4">
                    <div>
                        <a href={{ asset('images/img4.jpg') }} class="highslide" onclick="return hs.expand(this)">
                            <img src={{ asset('images/img4.jpg') }} alt="Highslide JS" title="Click to enlarge" />
                        </a>


                        <div class="highslide-caption">
                            Caption for the first image. This caption can be styled using CSS.
                        </div>
                    </div>
                    <div>
                        <a href={{ asset('images/img4.jpg') }} class="highslide" onclick="return hs.expand(this)">
                            <img src={{ asset('images/img4.jpg') }} alt="Highslide JS" title="Click to enlarge" />
                        </a>


                        <div class="highslide-caption">
                            Caption for the first image. This caption can be styled using CSS.
                        </div>
                    </div>
                    <div>
                        <a href={{ asset('images/img4.jpg') }} class="highslide" onclick="return hs.expand(this)">
                            <img src={{ asset('images/img4.jpg') }} alt="Highslide JS" title="Click to enlarge" />
                        </a>


                        <div class="highslide-caption">
                            Caption for the first image. This caption can be styled using CSS.
                        </div>
                    </div>
                </div>
            </div>
    </section>


    {{-- <div class="">

        <!-- Repetionion of the above -->
        <a href={{ asset('images/img4.jpg') }} class="highslide" onclick="return hs.expand(this)">
            <img src={{ asset('images/img4.jpg') }} alt="Highslide JS" title="Click to enlarge" /></a>

        <div class="highslide-caption">
            Caption for the second image.
        </div>

        <a href={{ asset('images/img4.jpg') }} class="highslide" onclick="return hs.expand(this)">
            <img src={{ asset('images/img4.jpg') }} alt="Highslide JS" title="Click to enlarge" /></a>

        <div class="highslide-caption">
            Caption for the third image.
        </div>

    </div> --}}


    {{-- <script type="text/javascript" src="/highslide/highslide-with-gallery.js"></script> --}}
    <script type="text/javascript" src="{{ asset('js/highslide-with-gallery.min.js') }}"></script>


    <script type="text/javascript">
        hs.graphicsDir = '../highslide/graphics/';
        hs.align = 'center';
        hs.transitions = ['expand', 'crossfade'];
        hs.outlineType = 'glossy-dark';
        hs.wrapperClassName = 'dark';
        hs.fadeInOut = true;
        hs.dimmingOpacity = 0.75;

        // Add the controlbar
        if (hs.addSlideshow) hs.addSlideshow({
            //slideshowGroup: 'group1',
            interval: 5000,
            repeat: false,
            useControls: true,
            fixedControls: 'fit',
            overlayOptions: {
                opacity: .6,
                position: 'bottom center',
                hideOnMouseOut: true
            }
        });
    </script>

</x-app-layout>
