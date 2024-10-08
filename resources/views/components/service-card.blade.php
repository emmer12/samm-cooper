@props(['title', 'imageUrl', 'lead', 'slug', 'icon'])


<div class="bg-[#F7F9FC] service-card card-animation">
    <div class="display w-full bg-red-100 relative  ">
        <div class="overflow-hidden">
            <a href="{{ route('service-details', ['slug' => $slug]) }}">
                <img class="object-cover w-full h-[240px]  service-image" src={{ $imageUrl }} alt={z $title }}>
            </a>
        </div>

        <div class="box-image absolute bottom-[-50px] center-h ">
            <img src="{{ asset("images/$icon") }}" class="h-[52px] w-[52px] service-icon" alt={{ $title }}>
        </div>
    </div>
    <div class="text-center mt-[50px] py-10 px-4">
        <h4 class="text-xl font-bold">{!! $title !!}</h4>
        <p class="text-base text-[#7c7c7c] line-clamp">{!! $lead !!}</p>

        <a class="gradient-text flex justify-center items-center gap-2"
            href="{{ route('service-details', ['slug' => $slug]) }}">Learn More
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="#db2d1b" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>

        </a>
    </div>
</div>
