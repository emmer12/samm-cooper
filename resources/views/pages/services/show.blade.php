<x-app-layout>
    <link rel="stylesheet" type="text/css" href="/css/highslide.css" />
    <x-slot:title>
        {{ $service['title'] }}
    </x-slot>


    <div>
        <x-banner title="{{ $service['title'] }}" page="{{ $service['title'] }}" middleText="Services"
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
                {!! $service['description'] !!}
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
                    @foreach ($service['images'] as $item)
                        <div>
                            <a href="{{ $item['url'] }}" class="highslide" onclick="return hs.expand(this)">
                                <img src="{{ $item['url'] }}" alt="Highslide JS" title="Click to enlarge" />
                            </a>


                            <div class="highslide-caption">
                                {{ $item['caption'] }}
                            </div>
                        </div>
                    @endforeach
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
