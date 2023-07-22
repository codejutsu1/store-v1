<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-5/6 mx-auto py-5 flex justify-center">
            <p class="text-xl md:text-2xl font-semibold text-gray-200 uppercase">
            <span class="underline"><a href="{{ route('home') }}">Home</a></span> / Cart / <span class="inline-block text-lg md:text-xl text-[#FEE715]"><i>Checkout</i></span> 
            </p><br>
        </div>
        <a href="#" class="text-[#FEE715] underline block text-center pb-5">Continue shopping?</a>
    </section>

    <section>
        <livewire:website.cart.checkout />
    </section>
</x-page-layout>