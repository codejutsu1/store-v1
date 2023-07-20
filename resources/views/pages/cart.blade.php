<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-5/6 mx-auto py-5 flex justify-center">
            <p class="text-2xl font-semibold text-gray-200 uppercase">
                <span class="underline"><a href="{{ route('home') }}">Home</a></span> / <span class="inline-block text-xl text-[#FEE715]"><i>Your Cart</i></span> 
            </p>
        </div>
    </section>

    <section>
        <livewire:website.cart.show-cart />
    </section>

</x-page-layout>