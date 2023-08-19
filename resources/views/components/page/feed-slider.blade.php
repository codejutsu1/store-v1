<div class="py-10 mx-auto w-full">
        <h1 class="text-center text-2xl md:text-4xl uppercase font-semibold my-10">
            Feeds
        </h1>
       <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($feeds as $feed)
                <div class="swiper-slide">
                    <img class="h-full w-full object-fill md:object-cover" src="../../storage/feed/{{ $feed->image }}" alt="{{ $feed->description }}" loading="lazy">
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination text-[#FEE715]"></div>
       </div>
    </div>